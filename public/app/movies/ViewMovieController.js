moviesApp.controller('ViewMovieController', ['$scope', '$routeParams', 'MoviesService',  function MovieListController($scope, $routeParams, MoviesService) {
   
    
    var base64Img = [];
    var base64Header;
    
    var margins = {
      top: 70,
      bottom: 40,
      left: 30,
      width: 550
    };
    
    $scope.generate = function()
    {
        var pdf = new jsPDF('p', 'pt', 'a4');
        pdf.setFontSize(18);
        pdf.fromHTML(document.getElementById('html-2-pdfwrapper'), 
            margins.left, // x coord
            margins.top,
            {
                // y coord
                width: margins.width// max width of content on PDF
            },function(dispose) {
                headerFooterFormatting(pdf, pdf.internal.getNumberOfPages());
            }, 
            margins);
            
        let top = 200;
        let left = margins.left;
        let imageSizeW = 150;
        let imageSizeH = 200;
        if (base64Img.length) {
            base64Img.forEach(element => {
                pdf.addImage(element, 'JPEG', left, top, imageSizeW, imageSizeH);
                left += imageSizeW + 30;
                if (left + imageSizeW > margins.width +  margins.left) {
                    left = margins.left;
                    top += imageSizeH + 30;
                }
            });
        }


        pdf.save('movie.pdf');
    };
    function headerFooterFormatting(doc, totalPages)
    {
        for(var i = totalPages; i >= 1; i--)
        {
            doc.setPage(i);                            
            //header
            header(doc);
            
            footer(doc, i, totalPages);
            doc.page++;
        }
    };
    
    function header(doc)
    {
        doc.setFontSize(30);
        doc.setTextColor(40);
        doc.setFontStyle('normal');
        

        if (base64Header) {
            doc.addImage(base64Header, 'JPEG', margins.left, 20, 40, 40);
        }

            
        doc.text("Reporte de peliculas", margins.left + 50, 40 );
        doc.setLineCap(2);
        doc.line(3, 70, margins.width + 43,70); // horizontal line
    };
    
    // You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
    // http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
    function imgToBase64(url, callback, imgVariable) {
     
        if (!window.FileReader) {
            callback(null);
            return;
        }
        var xhr = new XMLHttpRequest();
        xhr.responseType = 'blob';
        xhr.onload = function() {
            var reader = new FileReader();
            reader.onloadend = function() {
                imgVariable = reader.result.replace('text/xml', 'image/jpeg');
                callback(imgVariable);
            };
            reader.readAsDataURL(xhr.response);
        };
        xhr.open('GET', url);
        xhr.send();
    };
    
    function footer(doc, pageNumber, totalPages){
    
        var str = "Page " + pageNumber + " of " + totalPages
       
        doc.setFontSize(10);
        doc.text(str, margins.left, doc.internal.pageSize.height - 20);
        
    };
    
    imgToBase64('https://media.licdn.com/dms/image/C4D0BAQEK4CEmsblssQ/company-logo_200_200/0?e=2159024400&v=beta&t=KyvlztqucBTpyf-vGE8-yAp6yIqdHZbBWiP9pFSIMp8', function(base64){
        base64Header = base64;
    });

    MoviesService.getId({id : $routeParams.id }).$promise.then(function(movie){
        if (movie.urls) {
            for (var i in movie.urls){ 
                let url = '/storage/' + movie.urls[i];
                 imgToBase64(url, function(base64) {
                    base64Img.push(base64);
                });
            };
        }

        $scope.movie = movie;
    }, function(e){
        console.log(e.data.errors)
        if (e.status === 422) $scope.errors = e.data.errors;
        else $scope.errors = ["Error, por favor intente de nuevo"];
    }); 

}]);
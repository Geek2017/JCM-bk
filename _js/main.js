$(function () {

  function UpdateData() {
     
    var oldname=localStorage.getItem('updatename')
    var newname=localStorage.getItem('newname')

        $.ajax({
            type: "POST",
            url: $(location).attr('href')+"/update",
            data: {oldname:oldname,newname:newname},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            console.log(data)
            },
            error: function(err) {
            // alert(JSON.stringify(err));
            console.log(err)
            }
        });

}

  // localStorage.setItem('PDFbase64',datafile);


$( "#insert-data" ).click(function() {   
    // var oldn=$("#oldn").val();
    // var newn=$("#newn").val();

    var file_name = $('#field1').val()+'_'+
    $('#field2').val()+'_'+
    $('#field3').val()+'_'+
    $('#field4').val()+'_'+
    $('#field5').val();

     var oldn=localStorage.getItem('indexId');
     var newn=file_name;
 
        $.ajax({
            type: "POST",
            url: $(location).attr('href')+"/update",
            data: {oldn:oldn,newn:newn},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            console.log(data)
           
            alert('relaod')
            },
            error: function(err) {
            // alert(JSON.stringify(err));
            console.log(err)
            window.top.location.reload();
            
            }
        });
       
});
  


var B64=localStorage.getItem('PDFbase64');
var pdf =B64; 

  $( "#arrowsc" ).click(function() {
    $( "#arrows" ).click();
  });

  $( "#cropc" ).click(function() {
    $( "#crop" ).click();
  });

  $( "#plusc" ).click(function() {
    $( "#plus" ).click();
 
  });

  $( "#minusc" ).click(function() {
    $( "#minus" ).click();
 
  });

   
  $('#image').attr('src', localStorage.getItem('src'));
  
   

  

  $( "#ocrb64" ).click(function() {
    // console.log(result.toDataURL(uploadedImageType))
    
    $( "#ocrsm" ).click();

    var baseCode64 = localStorage.getItem('snapbase64').replace('data:image/png;base64,', '').replace('data:image/jpeg;base64,', '');
			
			var requestJson = {
				"requests": [
				  {
					"image": {
					  "content": baseCode64
					},
					"features": [
					  {
						"type": "TEXT_DETECTION"
					  }
					]
				  }
				]
			  }

    function googleapi(){
		
      $.ajax({
        url: "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBbP86Y1NNMQS14N70aiOPCCbf5VK25Vgw",
        type: "POST",
        data: JSON.stringify(requestJson),
        headers: {
          "Content-Type":"application/json"
        },
        success: function (response) {
       
        // var resdata = response.responses[0].fullTextAnnotation.text
 
        if (typeof response.responses[0].fullTextAnnotation == "undefined") {
          alert('API err pls. try again') 
        }else{
          if($('#field1').val()==''){	
            $('#field1').val(response.responses[0].fullTextAnnotation.text);
            var ocrtel = $('#field2');
            var value = ocrtel.val();
            ocrtel.val("");
            ocrtel.focus();
            ocrtel.val(value);
            
           }else if($('#field1').val()!=='' && $('#field2').val()==''){
             $('#field2').val(response.responses[0].fullTextAnnotation.text);
             var ocradd = $('#field3');
             var value = ocradd.val();
             ocradd.val("");
             ocradd.focus();
             ocradd.val(value);
           }else if($('#field2').val()!=='' && $('#field3').val()==''){
             $('#field3').val(response.responses[0].fullTextAnnotation.text);
             var ocradd = $('#field4');
             var value = ocradd.val();
             ocradd.val("");
             ocradd.focus();
             ocradd.val(value);
           }else if($('#field3').val()!=='' && $('#field4').val()==''){
             $('#field4').val(response.responses[0].fullTextAnnotation.text);
             var ocradd = $('#field5');
             var value = ocradd.val();
             ocradd.val("");
             ocradd.focus();
             ocradd.val(value);
           }else if($('#field4').val()!=='' && $('#field5').val()==''){
             $('#field5').val(response.responses[0].fullTextAnnotation.text);
           if($('#field1').val()!==null&&
              $('#field2').val()!==null&&
              $('#field3').val()!==null&&
              $('#field4').val()!==null&&
              $('#field5').val()!==null){
             
           localStorage.setItem('filename',	
             $('#field1').val()+'_'+
             $('#field2').val()+'_'+
             $('#field3').val()+'_'+
             $('#field4').val()+'_'+
             $('#field5').val());
 
           }else{
             alert('fields cant be blank');
           }
           }
        }

        },
        
        error: function (jqXHR, exception) {
          console.log(jqXHR, exception);
          console.log('content:',requestJson)
         
        },
      });

      
    
    }
    googleapi();
  })

  var console = window.console || { log: function () {} };
  var URL = window.URL || window.webkitURL;
  var $image = $('#image');
  var $download = $('#download');
  var $dataX = $('#dataX');
  var $dataY = $('#dataY');
  var $dataHeight = $('#dataHeight');
  var $dataWidth = $('#dataWidth');
  var $dataRotate = $('#dataRotate');
  var $dataScaleX = $('#dataScaleX');
  var $dataScaleY = $('#dataScaleY');
  var options = {
        aspectRatio:"",
        preview: '.img-preview',
        crop: function (e) {
          $dataX.val(Math.round(e.detail.x));
          $dataY.val(Math.round(e.detail.y));
          $dataHeight.val(Math.round(e.detail.height));
          $dataWidth.val(Math.round(e.detail.width));
          $dataRotate.val(e.detail.rotate);
          $dataScaleX.val(e.detail.scaleX);
          $dataScaleY.val(e.detail.scaleY);
        }
      };
  var originalImageURL = $image.attr('src');
  var uploadedImageName = 'cropped.jpg';
  var uploadedImageType = 'image/jpeg';
  var uploadedImageURL;


  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();


  // Cropper
  $image.on({
    ready: function (e) {
      console.log(e.type);
      $('.cropper-crop-box').hide();
    },
    cropstart: function (e) {
      console.log(e.type, e.detail.action);
    },
    cropmove: function (e) {
      console.log(e.type, e.detail.action);
      $('.cropper-crop-box').show();
    },
    cropend: function (e) {
      console.log(e.type, e.detail.action);
      $('.cropper-crop-box').show();
    },
    crop: function (e) {
      console.log(e.type);
    },
    zoom: function (e) {
      console.log(e.type, e.detail.ratio);
      $('.cropper-crop-box').hide();
    }
  }).cropper(options);


  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }


  // Download
  if (typeof $download[0].download === 'undefined') {
    $download.addClass('disabled');
  }


  // Options
  $('.docs-toggles').on('change', 'input', function () {
    var $this = $(this);
    var name = $this.attr('name');
    var type = $this.prop('type');
    var cropBoxData;
    var canvasData;

    if (!$image.data('cropper')) {
      return;
    }

    if (type === 'checkbox') {
      options[name] = $this.prop('checked');
      cropBoxData = $image.cropper('getCropBoxData');
      canvasData = $image.cropper('getCanvasData');

      options.ready = function () {
        $image.cropper('setCropBoxData', cropBoxData);
        $image.cropper('setCanvasData', canvasData);
      };
    } else if (type === 'radio') {
      options[name] = $this.val();
    }

    $image.cropper('destroy').cropper(options);
  });


  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var cropper = $image.data('cropper');
    var cropped;
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if (cropper && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      cropped = cropper.cropped;

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            $image.cropper('clear');
          }

          break;

        case 'getCroppedCanvas':
          if (uploadedImageType === 'image/jpeg') {
            if (!data.option) {
              data.option = {};
            }

            data.option.fillColor = '#fff';
          }

          break;
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      switch (data.method) {
        case 'rotate':
          if (cropped && options.viewMode > 0) {
            $image.cropper('crop');
          }

          break;

        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {
            // Bootstrap's Modal
            // $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            console.log(result.toDataURL(uploadedImageType))
            localStorage.setItem('snapbase64',result.toDataURL(uploadedImageType))
            // if (!$download.hasClass('disabled')) {
            //   download.download = uploadedImageName;
            //   $download.attr('href', result.toDataURL(uploadedImageType));
            // }
          }

          break;

        case 'destroy':
          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
            uploadedImageURL = '';
            $image.attr('src', originalImageURL);
          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }

    }
    
  });
  

  // Keyboard
  $(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });


  // Import image
  var $inputImage = $('#inputImage');

  if (URL) {
    $inputImage.change(function () {
      var files = this.files;
      var file;

      if (!$image.data('cropper')) {
        return;
      }

      if (files && files.length) {
        file = files[0];

        if (/^image\/\w+$/.test(file.type)) {
          uploadedImageName = file.name;
          uploadedImageType = file.type;

          if (uploadedImageURL) {
            URL.revokeObjectURL(uploadedImageURL);
          }

          uploadedImageURL = URL.createObjectURL(file);
          $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
          $inputImage.val('');
        } else {
          window.alert('Please choose an image file.');
        }
      }
    });
  } else {
    $inputImage.prop('disabled', true).parent().addClass('disabled');
  }
  
});


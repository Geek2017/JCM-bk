<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <title>OCR@NewScan</title>
      <script src="https://beta3.eridian.de/_js/jq.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://beta3.eridian.de/_css/bt.css">
      <link rel="stylesheet" href="https://beta3.eridian.de/_css/cpr.css">
      <link rel="stylesheet" href="https://beta3.eridian.de/_css/main.css">
   </head>
   <body>
   <center>
      <!-- <div class="card text-white bg-secondary " style="width: 100%"> -->
         <div class="card-header">NewScan</div>
         <div class="row">
            <div class="col-md-9">
               <br>
               <div class="img-container card text-white bg-secondary">
               <div class="card-header">Image</div>
                  <img id="image" src="_img/loading.gif" alt="Picture">
               </div>
            </div>
            <div class="col-md-3">
               <div class="docs-data">
                  <br>
                  <div class="card text-white bg-primary mb-2" style="max-width: 20rem;">
                     <div class="card-header">Snap Image</div>
                     <div class="img-preview preview-lg"></div>
                  </div>
                  <div class="card text-white bg-primary mb-1">
                  <div class="card-header">Fields</div>
                  <div class="input-group input-group-sm">
                  
                     <span class="input-group-prepend">
                     <label class="input-group-text" for="dataX">Field #1</label>
                     </span>
                     <input type="text" class="form-control" id="field1" autofocus>
                  </div>
                  <div class="input-group input-group-sm">
                     <span class="input-group-prepend">
                     <label class="input-group-text" for="dataX">Field #2</label>
                     </span>
                     <input type="text" class="form-control" id="field2" autofocus>
                  </div>
                  <div class="input-group input-group-sm">
                     <span class="input-group-prepend">
                     <label class="input-group-text" for="dataX">Field #3</label>
                     </span>
                     <input type="text" class="form-control" id="field3" autofocus>
                  </div>
                  <div class="input-group input-group-sm">
                     <span class="input-group-prepend">
                     <label class="input-group-text" for="dataX">Field #4</label>
                     </span>
                     <input type="text" class="form-control" id="field4" autofocus>
                  </div>
                  <div class="input-group input-group-sm">
                     <span class="input-group-prepend">
                     <label class="input-group-text" for="dataX">Field #5</label>
                     </span>
                     <input type="text" class="form-control" id="field5" autofocus>
                  </div>
                  </div>
                  <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                     <div class="card-header">OCR Control</div>
                     <div class="btn-group">
                        <button id="ocrb64"  type="button" class="btn btn-secondary btn-block btn-sm" >Get TxT</button>
                        <button id="arrowsc" type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                        <span class="fa fa-arrows"></span>
                        </span>
                        </button>
                        <button id="cropc" type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                        <span class="fa fa-crop"></span>
                        </span>
                        </button>
                        <button id="plusc" type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                        <span class="fa fa-search-plus"></span>
                        </span>
                        </button>
                        <button id="minusc" type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                        <span class="fa fa-search-minus"></span>
                        </span>
                        </button>
                        
                        <!-- <a id='dwnldLnk' download='xx.pdf' style="display:none;" /> 

                        <a href="#" onclick="downloadPDF();" class="btn btn-secondary">Save</a>-->

                   
                          <button type="button" class="btn btn-secondary btn-block" name="insert-data" id="insert-data" >Save</button>
                   
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-9 docs-buttons" >
               <!-- <h3>Toolbar:</h3> -->

            

               <div class="btn-group" hidden> 
                  <button id="arrows" type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                  <span class="fa fa-arrows"></span>
                  </span>
                  </button>
                  <button id="crop" type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                  <span class="fa fa-crop"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group" hidden>
                  <button id="plus" type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
                  <span class="fa fa-search-plus"></span>
                  </span>
                  </button>
                  <button id="minus" type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
                  <span class="fa fa-search-minus"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
                  <span class="fa fa-arrow-left"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">
                  <span class="fa fa-arrow-right"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
                  <span class="fa fa-arrow-up"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
                  <span class="fa fa-arrow-down"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
                  <span class="fa fa-rotate-left"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
                  <span class="fa fa-rotate-right"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
                  <span class="fa fa-arrows-h"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
                  <span class="fa fa-arrows-v"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
                  <span class="fa fa-check"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)">
                  <span class="fa fa-remove"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)">
                  <span class="fa fa-lock"></span>
                  </span>
                  </button>
                  <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)">
                  <span class="fa fa-unlock"></span>
                  </span>
                  </button>
               </div>
               <div class="btn-group btn-group-crop" style="display:none">
                  <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
                  Get Cropped Canvas
                  </span>
                  </button>
                  <button id="ocrsm" type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                  160&times;90
                  </span>
                  </button>
                  <button type="button" class="btn btn-success" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                  <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                  320&times;180
                  </span>
                  </button>
               </div>
               <div class="btn-group">
                <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
                <span class="fa fa-refresh"></span>
                </span>
                </button>
                
                <!-- <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                <span class="fa fa-upload"></span>
                </span>
                </label> -->
                <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
                <span class="docs-tooltip" data-toggle="tooltip" title="cropper.destroy()">
                <span class="fa fa-power-off"></span>
                </span>
                </button>
               </div>
               <!-- Show the cropped image in modal -->
               <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.modal -->
            </div>
            <!-- /.docs-buttons -->
         </div>
      <!-- </div> -->
      <!-- Scripts -->
      <script src="https://beta3.eridian.de/_js/bt.js"></script>
      <!-- <script src="https://fengyuanchen.github.io/js/common.js"></script> -->
      <script src="https://beta3.eridian.de/_js/crp.js"></script>
      <script src="https://beta3.eridian.de/_js/jquery-cropper.js"></script>
      <script src="https://beta3.eridian.de/_js/main.js"></script>
   </body>
</html>

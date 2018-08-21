
{form:open}

<div class="accordion">
    <h4>Dokument hochladen 1/5</h4>
    <div class="upload_content">
    <fieldset>
	    
		<div class="formfield">
				<label for="name">Datum</label>
					{form:datum} <span class="text_beschreibung">(tt.mm.jjjj)</span>
					{form:error:datum}
		</div>
		
	
		<div class="formfield">
				<label for="name">Name</label>
					{form:name}
					{form:error:name}
					<label id="meldungName" style="color: red"> </label>
					
		</div>
		
		<div class="formfield">
				<label for="summe">Summe</label>
					{form:summe}
					{form:error:summe}
		</div>
		
		<div id="userfile0" class="formfield">
				<label for="name">Datei</label>
					{form:userfile}
					{form:error:userfile}
		</div>
		<div class="formfield">
				<label for="beschreibung">Beschreibung</label>
					{form:beschreibung}{form:error:beschreibung}
		</div>
	</fieldset>
	    
	    </div>
    <h4>Dokument hochladen 2/5</h4>
     <div class="upload_content">
     <fieldset>
<legend> </legend>
	<div class="formfield">
			<label for="name">Datum</label>
				{form:datum1} <span class="text_beschreibung">(tt.mm.jjjj)</span>
				{form:error:datum1}
	</div>

	<div class="formfield">
			<label for="name">Name</label>
				{form:name1}
				{form:error:name1}
	</div>
	
	<div class="formfield">
			<label for="summe">Summe</label>
				{form:summe1}
				{form:error:summe1}
	
	
	<div id="userfile1" class="formfield">
			<label for="name">Datei</label>
				{form:userfile1}
				{form:error:userfile1}
	</div>


	
	<div class="formfield">
			<label for="beschreibung">Beschreibung</label>
				{form:beschreibung1}{form:error:beschreibung1}
	</div>
</fieldset>
     
     </div>
    <h4>Dokument hochladen 3/5 </h4>
    <div class="upload_content">
    <fieldset>
	<div class="formfield">
			<label for="name">Datum</label>
				{form:datum2} <span class="text_beschreibung">(tt.mm.jjjj)</span>
				{form:error:datum2}
	</div>

	<div class="formfield">
			<label for="name">Name</label>
				{form:name2}
				{form:error:name2}
	</div>
	
	<div class="formfield">
			<label for="summe">Summe</label>
				{form:summe2}
				{form:error:summe2}
	</div>
	
	<div id="userfile2" class="formfield">
			<label for="name">Datei</label>
				{form:userfile2}
				{form:error:userfile2}
	</div>


	
	<div class="formfield">
			<label for="beschreibung">Beschreibung</label>
				{form:beschreibung2}{form:error:beschreibung2}
	</div>
</fieldset>
    
    </div>
    
     <h4>Dokument hochladen 4/5</h4>
    <div class="upload_content">
    <fieldset>
	<div class="formfield">
			<label for="name">Datum</label>
				{form:datum3} <span class="text_beschreibung">(tt.mm.jjjj)</span>
				{form:error:datum3}
	</div>

	<div class="formfield">
			<label for="name">Name</label>
				{form:name3}
				{form:error:name3}
	</div>
	
	<div class="formfield">
			<label for="summe">Summe</label>
				{form:summe3}
				{form:error:summe3}
	</div>
	
	<div id="userfile3" class="formfield">
			<label for="name">Datei</label>
				{form:userfile3}
				{form:error:userfile3}
	</div>


	
	<div class="formfield">
			<label for="beschreibung">Beschreibung</label>
				{form:beschreibung3}{form:error:beschreibung3}
	</div>
</fieldset>    
	    </div>
    
 <h4>Dokument hochladen 5/5</h4>
    <div class="upload_content">
    <fieldset>
	<div  class="formfield">
			<label for="name">Datum</label>
				{form:datum4} <span class="text_beschreibung">(tt.mm.jjjj)</span>
				{form:error:datum4}
	</div>

	<div class="formfield">
			<label for="name">Name</label>
				{form:name4}
				{form:error:name4}
	</div>
	
	<div class="formfield">
			<label for="summe">Summe</label>
				{form:summe4}
				{form:error:summe4}
	</div>
	
	<div id="userfile4" class="formfield">
			<label for="name">Datei</label>
				{form:userfile4}
				{form:error:userfile4}
	</div>
    
  
	<div class="formfield">
			<label for="beschreibung">Beschreibung</label>
				{form:beschreibung4}{form:error:beschreibung4}
	</div>
</fieldset>
    
	    </div>
    
</div>



	<div class="formfield">
			<div class="btn_field">
						<button id="inputsubmitForm" name="send" type="submit" class="btn btn_accept pill-l"><span><span>hochladen</span></span></button>
						<button name="reset" type="reset" class="btn btn_decline pill-r"><span><span>Zurücksetzen</span></span></button>
			</div>
	</div>

	<div class="clearfix">&nbsp;</div>
{form:close}
<div style="width:1px;height:50px;">&nbsp;</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


{form:success}


<script>
$(document).ready(function(){

var ocrb640;
var ocrb641;
var ocrb642;
var ocrb643;
var ocrb644; 

		$('#userfile0 input').change(function(){
					
			var x = document.getElementById("userfile0").getElementsByTagName("input");
			
			console.log(x[0].files)

			var selectedFile = x[0].files
  
			if (selectedFile.length > 0) {
				
					var fileToLoad = selectedFile[0];
					
					var fileReader = new FileReader();
					var base64;
				
					fileReader.onload = function(fileLoadedEvent) {
						base64 = fileLoadedEvent.target.result;

						// localStorage.setItem('0ocrb64',base64)
						ocrb640=base64;
						console.log('---------0',ocrb640)
						
					};
				
				fileReader.readAsDataURL(fileToLoad);
				
			}

		});

		$('#userfile1 input').change(function(){
					
			var x = document.getElementById("userfile1").getElementsByTagName("input");
			
			console.log(x[0].files)

			var selectedFile = x[0].files
  
			if (selectedFile.length > 0) {
				
					var fileToLoad = selectedFile[0];
					
					var fileReader = new FileReader();
					var base64;
				
					fileReader.onload = function(fileLoadedEvent) {
						base64 = fileLoadedEvent.target.result;

						ocrb641=base64;
						console.log('---------1',ocrb641)
					};
				
				fileReader.readAsDataURL(fileToLoad);
			}

		});

		$('#userfile2 input').change(function(){
					
			var x = document.getElementById("userfile2").getElementsByTagName("input");
			
			console.log(x[0].files)

			var selectedFile = x[0].files
  
			if (selectedFile.length > 0) {
				
					var fileToLoad = selectedFile[0];
					
					var fileReader = new FileReader();
					var base64;
				
					fileReader.onload = function(fileLoadedEvent) {
						base64 = fileLoadedEvent.target.result;

						ocrb642=base64;
						console.log('---------2',ocrb642)
					};
				
				fileReader.readAsDataURL(fileToLoad);
			}

		});

		$('#userfile3 input').change(function(){
					
			var x = document.getElementById("userfile3").getElementsByTagName("input");
			
			console.log(x[0].files)

			var selectedFile = x[0].files
  
			if (selectedFile.length > 0) {
				
					var fileToLoad = selectedFile[0];
					
					var fileReader = new FileReader();
					var base64;
				
					fileReader.onload = function(fileLoadedEvent) {
						base64 = fileLoadedEvent.target.result;

						ocrb643=base64;
						console.log('---------3',ocrb643)
						
					};
				
				fileReader.readAsDataURL(fileToLoad);
			}

		});	

		$('#userfile4 input').change(function(){
					
			var x = document.getElementById("userfile4").getElementsByTagName("input");
			
			console.log(x[0].files)

			var selectedFile = x[0].files
  
			if (selectedFile.length > 0) {
				
					var fileToLoad = selectedFile[0];
					
					var fileReader = new FileReader();
					var base64;
				
					fileReader.onload = function(fileLoadedEvent) {
						base64 = fileLoadedEvent.target.result;

						ocrb644=base64;
						console.log('---------4',ocrb644)

				
					};
				
				fileReader.readAsDataURL(fileToLoad);
			}

		});

 $('#inputsubmitForm').click(function(){
  $('#meldungName').html("");
          var searchWord = "Eridian_Rechnung";
         searchWord= searchWord.replace(/\s/g,'');
		 
		if($('input[name=name]').val().replace(/\s/g,'').search(searchWord) !=-1 ){
		     $('#meldungName').html("W&auml;nlen Sie bitte andere Name");
		
		     return false;
		}
		
		if($('input[name=name1]').val().replace(/\s/g,'').search(searchWord) !=-1){
		     $('#meldungName').html("W&auml;nlen Sie bitte andere Name");
		
		     return false;
		}

		if($('input[name=name2]').val().replace(/\s/g,'').search(searchWord) !=-1){
		     $('#meldungName').html("W&auml;nlen Sie bitte andere Name");
		
		     return false;
		}
		if($('input[name=name3]').val().replace(/\s/g,'').search(searchWord) !=-1){
		     $('#meldungName').html("W&auml;nlen Sie bitte andere Name");
		
		     return false;
		}
		if($('input[name=name4]').val().replace(/\s/g,'').search(searchWord) !=-1){
		     $('#meldungName').html("W&auml;nlen Sie bitte andere Name");
		
		     return false;
		}
		
		
		
		
		
	});
});
</script>
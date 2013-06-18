
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="../css/structure.css" rel="stylesheet">
<link href="../css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="../scripts/wufoo.js"></script>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>


<body id="public">

<div id="container" class="ltr">
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
   
   <header id="header" class="info">
<h2>Iniciar Sesion</h2>
<div></div>
</header>

<ul>

<li id="foli119" class="notranslate      ">
<label class="desc" id="title119" for="Field119">
Nick:
<span id="req_119" class="req">*</span>
</label>
<div>
<input id="username" name="username" type="text" class="field text medium" value="" maxlength="20" tabindex="1" onkeyup="" required />
</div>
</li><li id="foli116" class="notranslate      ">
<label class="desc" id="title116" for="Field116">
Password:
<span id="req_116" class="req">*</span>
</label>
<div>
<input id="password" name="password" type="password" class="field text medium" value="" maxlength="20" tabindex="2" onkeyup="" required />
</div>
</li>

 <li class="buttons ">
<div>


                    <input id="saveForm" name="saveForm" class="btTxt submit" 
    type="submit" value="Iniciar Sesion"
 /></div>
</li>
</ul>
</div>
</form>
</body>
   <!--
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>-->


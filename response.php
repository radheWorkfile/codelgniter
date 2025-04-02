<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">  
<head>
	<title>Raj Aryan Nursing & Paramedical College</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8"/>
	<meta name="description"
        content="Raj Aryan Nursing & Paramedical College is a new initiative of Aryaman Educational Trust in the field of health education aiming at furnishing humanity with well trained,  professionally expert nurses and midwives that can provide unparalleled maternity services.">
	<meta name="keywords" content="Best College For Nursing, Best College For Paramedical, Best Nursing & Paramedical College In Bihar, Nursing Colleges In Bihar, Paramedical College In Bihar, Affordable Nursing College In Bihar" />
	<!--// Meta tag Keywords -->
	<?php include("include/js.php") ?>
</head>

<body>
	<?php
		include("include/header.php");
    ?>
<main>
    <section>
	<?php
	include("includse/sideform.php"); 
	?>
    </section>
    
    <section>
            <div class="container my-5 text-center">
                <div class="response bg-response">
                    <h1><?php echo $_SESSION["response"]?></h1>
                    
                </div>
            </div>
    </section>
</main>
	<!--including footer.php-->
	<?php
		include("include/footer.php");
	?>
</body>

</html>
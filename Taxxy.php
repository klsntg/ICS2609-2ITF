<?php 
extract($_POST);
if(isset($save))
{
	switch($ch)
	{
		case 'Bi-Monthly':
		$annualSalary=$fn*24;
		break;
		
		case 'Monthly':
		$annualSalary=$fn*12;
		break;
	}

    $annualTax=0;
    $annualSalary;

        if ($annualSalary > 8000000) {
          $annualTax = 2410000 + ($annualSalary - 8000000) * 0.35;
        } else if ($annualSalary > 2000000) {
          $annualTax = 490000 + ($annualSalary - 2000000) * 0.32;
        } else if ($annualSalary > 800000) {
          $annualTax = 130000 + ($annualSalary - 800000) * 0.3;
        } else if ($annualSalary > 400000) {
          $annualTax = 30000 + ($annualSalary - 400000) * 0.25;
        } else if ($annualSalary > 250000) {
          $annualTax = ($annualSalary - 250000) * 0.2;
        }

    $monthlyTax = $annualTax / 12;
}

?>
<!DOCTYP html>
<html>
	<head>
		<title>Taxxy</title>
		<link rel="stylesheet" href="final.css">
	</head>
	<body>
    <div class="img">
      <img src ="bg.webp" alt="bg"style="width:800px;height:780px;float:right"> 
		<form method="post">
		<table border="1" align="center">
			
        <br><br><br><br><br><br><br>
        <h1>Taxxy: A Tax Calculator</h1> 
        <br>
        <div>A tax calculator is a tool to help you estimate your income tax during the year. If you are trying to estimate your income tax during the year, you can do so by using a tax calculator rather than preparing an entire return. 
        
        <b>Taxxy</b> is an online tax calculator web application that lets users calculate their taxes in just a matter of seconds. All they need to do is enter their annual income and choose which type of salary they receive, then Taxxy calculates their taxes automatically in real-time. Getting excited about Taxxy? <b>Calculate now! </b><div>
            <br>
			<tr>
				<th>Salary</th>
				<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
			</tr> 

			<tr>
				<th>Type</th>
				<th>
				<input type="radio" id="Bi-Monthly" name="ch" value="Bi-Monthly" checked>
				<label for="Bi-Monthly">Bi-Monthly</label>
				<input type="radio" id="Monthly" name="ch" value="Monthly" checked>
				<label for="Monthly">Monthly</label>
				</th>
			</tr>

			<tr>
			
				<th colspan="2">
				<input type="submit" 
				name="save" value="Compute"/>
				</th>
			</tr>

            <tr>
				<th>Annual Salary</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$annualSalary;?>"/></th>
            <tr>
                <th>Est. Annual Tax</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$annualTax;?>"/></th>
            <tr> 
                <th>Est. Monthly Tax</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$monthlyTax;?>"/></th>
			</tr> 


		</table>
		</form>
	</body>
</html>
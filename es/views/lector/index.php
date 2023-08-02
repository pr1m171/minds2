<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\models\ABMEjercicio;
use app\models\Resultados;
$this->title = 'Módulo '.$_GET['modulo'];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$mod = $_GET['modulo'];
$idusu = $_GET['user'];
$sql = Resultados::find()
    ->where('idModulo='.$mod)
    ->andWhere('idUsuario='.$idusu)
    ->orderBy('fecha')->all();
$total = 0;
foreach ($sql as $row) {
    $total++;
    $idMod = $row->id;
}

?>
</header>



<?php
///////DESCRIPCIONES DE MODULOS:
///
///
$desc = "";

if($mod == 1){
    $desc = "
    In this Module we combine The therapy for the development of the receptive eye cells and the therapy for the independence of the sense, for which you must follow the following steps: 
<br><br>
We begin with the The therapy for development of the receptive eye cells : 
<br><br>
1.	Take you BIT 1 and pass it through exercise 1. Remember that the shape and speed in which the BIT must pass is explained in the Generation Instruction Module. 
<br><br>
We continue with the therapy for the independence of the sense: 
1.	Open you Module 1 in exercise 5 . <br>
2.	Put a pencil in your mouth following the indications that were given en the General Instruction Module,  for the “Pencil therapy”. <br>
3.	Make the exercise 5 with the “Pencil Therapy”<br>
<br><br>
Now we will combine both therapies , for which: 
<br><br>
1.	Go back to the beginning of the Module, grab your BIT 2 and solved the exercises 1, 2 , 3 and 4.<br>
2.	Solved the exercise 5 with the “Pencil therapy”<br>
3.	Go back to the beginning of the Module, grab your BIT 3 and make exercises 1,2,3, and 4. <br>
4.	Make the exercise 5 with the “Pencil Therapy”<br>
5.	Repeat this operation making the  four exercises with the BITS 4,5,6 and 7. Stop when the fifteen minutes are fulfilled. <br>
6.	Remember that when finishing the four exercises with each BIT, you must repeat the exercise 5 using the “Pencil Therapy”<br>
7.	In case of using all the BIT before the fifteen minutes have been fulfilled repeat the process again until the time is up. <br>
<br><br>
Is highly fundamental that you take notes of the times that you have used each BIT , as well as the time you have done the “Pencil Therapy ”, ergo ,  exercise 5 , in order to correctly fill out your worksheet. 
<br><br>
Your first practice ends here. Remember that now you to fill in the worksheet and repeat this practice two more times today with a minimum of four hours of space between each practice.
<br><br>

    
    ";
}elseif ($mod == 2){
    $desc = "
    Before starting the therapies we recommend you to review the Operative Methodology in the General Instructive Module where the common instructions will be given to all the therapies: 
<br><br>
- Adopt a good posture<br>
- Prepare the SYNAPTIC BIT No 8, thus is the only one that needs this Module. <br>
- This practice must last fifteen minutes. <br>
<br>
HOW TO PERFORM CORRECTLY THE THERAPIES FROM MODULE 2
<br><br>
In this Module we are going to combine the therapy for the Development of the field of horizontal reading and the therapy for the independence of the senses in order to make correctly both therapies please follow the following steps. 
<br><br>
1.	Pass the BIT 8 through the exercises 1,2,3, and 4. Remember that the shape and speed that the BIT must go on are explained in the General Instructive Module. 
<br>2.	When you reach out the exercise 5 , leave the BIT and  make the exercise with the ‘Pencil Therapy’<br>
3.	Repeat the exercise 5, this time you will be making the ‘Humming therapy’<br>
4.	Go back to the beginning of the Module and repeat the steps described so many times until you reached fifteen minutes. <br>
 
<br>

Is fundamental that you write down the times that you have used the BIT, just like the times that you have used the Exercise 5 , as well as ‘the Pencil Therapy’, like in the ‘Humming’, with the goal to fill in correctly your worksheet. 
<br><br>
Your first practice ends here. Remember that now you have to fill in the worksheet and repeat this practice twice today. 
<br><br>
    ";
}elseif ($mod == 3){
    $desc = "
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 
<br><br>
Adopt the adequate stance. 
<br><br>
Put the SYNAPTIC BITS in order from the 1st to 8th on the table, up the top end of yout module.
This practice must last 15 minutes.
<br><br>
HOW TO CORRECTLY CARRY OUT THE MODULE 9 THERAPIES.<br>
In this module we will combine the Therapy for the Development of Vertical Reading with the Therapy for the independization of senses, for this you should follow the next steps.
<br><br>
1.	Take the BIT 8 and pass it by the exercises 1, 2, and 3.<br>
2.	Take the BIT 2 and pass it by the exercise 4.<br>
3.	Make the exercise 5 with the ‘Pencil therapy’<br>
4.	Go back to the start of the module and take the BIT 8 and pass it by the exercises 1,2, and 3.<br>
5.	Take the BIT 3 and pass it by the exercise 4.<br>
6.	Make the exercise 5 using the ‘Humming therapy’<br>
7.	Repeat the steps  from 1 to 6 until you have used all the BITS (4,5,6, and 7), in the exercise 4. <br>
8.	Remember that to carry out the exercise 5 you must alternate ‘Pencil and Humming’<br>
9.	Repeat as many times as possible in exactly 15 minutes.<br>
<br>
Its fundamental that you write down the number of times that you have used every BIT, just like the number of times that you have done the fifth therapy, both, ‘Pencil’ and ‘Humming’, with the aim to, be able to correctly fill in your worksheet. 
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.

<br>


    ";
}elseif ($mod == 4){
    $desc = "
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 
<br><br>
Adopt the adequate stance. 
<br><br>
Put the SYNAPTIC BITS in order from the 1st to 8th on the table, up the top end of your module.<br>
This practice must last 15 minutes.<br>
<br>
HOW TO CORRECTLY CARRY OUT THE MODULE 4 THERAPIES<br>
<br>
In this module we combine the following modules : Periferic Reading, Centrifugal and Global Fields, and the eye muscles with the Sense Independization Therapy. For which please follow the next steps: 
<br><br>
We will begin with the Therapy for the Development for the Periferic Reading Field .
<br><br>
1.	Exercise 1: Vertically run your eyes for 30 seconds. Count the number of times you have visited the page in this period of time and write it down on a sheet for this purpose. Count the times that you have go through during this time and write it down  in a paper.
<br>2.	Repeat this operation with every pages from exercise 1.<br>
<br>
We continue with the development therapy of the reading field:
<br><br>
1.	Exercise 2 : Read the words contained in the spirals from the inside out, also for thirty seconds. Write down the number of times you read the entire page.
<br>2.	Repeat this operation with every page from exercise 2. <br>
<br>
We continue with the Therapy for the Development of the Global Reading Field
<br><br>
1.	Exercise 3, pág 15: Take the BIT 8 and pass it by the first page of this exercise , always in a vertical way, like you have been doing it untill now. Read again the mentioned page this time without the BIT and repeat the operation as many times you can do in thirty seconds. Write down the times you go through the page. 
<br>
2.	Write down the time you read the page with and without the BIT . Repeat this operation en the next two following pages . Write down the times you reach to go through the page in thirty seconds. 
<br><br>

We continue with the therapy for the Development of the eye muscles: 
<br><br>
1.	Exercise 4, pag 18: Take the BIT 1 and read the page one time with the BIT and another time without it. The movement that your eyes will always do will be down and must be so strong that at the end of each column you will reach to see your stomach. Repeat this operation for thirty seconds and write it down. 
<br>2.	Exercise 4 , Pg 19. Make the exercise identically to the previous one, but this times passing the BIT 1 up , so when finishing a each column your eyes reach the point you have in front of you. Remember one time with the BIT another one without it. Repeat this for thirty seconds and write it down. 
<br>3.	Exercise 4 , Pg 20.  Make the exercise identically to the previous one, one with the BIT 1 another one without it but this time following the direction that the text indicates ; first down then up down and then up and so on… Repeat this operation for 30 seconds and write it down.

<br>4.	Exercise 4, Pg 21. Hold any BIT with your right hand resting on the table about 20 cm to the right of your module, this in order to create a reference point. Pass your gaze through each of the lines that make up the energetic fomra exercise, so that your sight hitting the BIT that supports the right. Repeat the operation for 30 seconds and write down. 

<br>5.	Exercise 4, Pg 22. Make the exercise identically to the previous one, holding the BIT 1 to you left side. Repeat this operation for 30 seconds and write it down.

<br>6.	Exercise 4, Pg 23. Take the BIT as you normally use it and pass it vertically across the page, following the direction marked by the arrows. Repeat this operation for thirty seconds and write down. 
<br><br>
We finished with the Therapy for the independization of senses: 
<br><br>
1.	Do exercise 5 one time with a “pencil” and the other one “Humming”. If you can make one of them in less than thirty seconds, congratulations. 
<br><br>
Is very important that you write down the times that you went through by each page in thirty seconds, in order to fill in correctly your worksheet. 
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 
<br>
    ";
}elseif ($mod == 5){
    $desc = "
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 
<br><br>

-Adopt the adequate stance. <br>
-Put the SYNAPTIC BITS in order from the 2nd to 8th on the table, up the top end of your module.<br>
-This practice must last 15 minutes.<br>

<br><br>
HOW TO CORRECTLY CARRY OUT THE MODULE 5 THERAPIES.<br>
<br>
In this module we combine the Therapy for the Development of the Receptive Eye Cells and the Therapy for the independization of the senses please follow the following steps: 
	<br><br>
1.	Grab the BIT 2 and pass it by the exercises 1, 2 ,3 and 4. <br>
2.	Make the exercise 5 with the “Pencil Therapy”<br>
3.	Go back to the module, grab the BIT 3 an make the exercises 1, 2, 3, and 4<br>
4.	make the exercise 5 with the “Pencil Therapy”<br>
5.	Repeat this steps until you have made the BITS from 2 and 7<br>
6.	Remember that when you reach to exercise 5 must combined “Pencil” and “Humming” <br>

<br>
Its fundamental that you write down the number of times that you have used every BIT, just like the number of times that you have done the fifth therapy, both, ‘Pencil’ and ‘Humming’, with the aim to, be able to correctly fill in your worksheet. 
<br><br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.
	<br><br>

    ";
}elseif ($mod == 6){
    $desc = "
    
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 
<br><br>

- Adopt the adequate posture. <br>
- This Module does not require of BITS<br>
- This practice must last 15 minutes.<br>
<br><br>

HOW TO CORRECTLY CARRY OUT THE MODULE 6 THERAPIES.<br><br>

We begin with the Development of the Horizontal Reading Field <br><br>

1.	The exercises 1 and 2: Take a glance by the center of the diamond of each column at the speed that you have acquired until now. <br>
2.	perform this operation for thirty seconds on each page and write down the number of times you completed<br>
<br>3.	Exercise 3 and 4 : Each page has an independent text, you should read each one of the previous texts and measure the time that it took you to do it. 
<br>4.	While reading the texts, try to do it by passing a glance by the center of the design , per say. moving your eyes the less possible. 
<br><br>
We continue with the Therapy for the independization of the sense: 
<br><br>
<br>1.	Make the exercise 5 by using the “Pencil Therapy”
<br>2.	Go back to the exercise 5 by performing the “Humming Therapy”
<br><br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.
<br><br>
	*The texts from Exercises 3 and 4,  pages from 17 to 24 were taken from books “Oasis” and “Love without boundaries” written by father: Gonzalo Gallo González . 


    
    ";
}elseif ($mod == 7){
    $desc = "
    
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 

<br><br>
- Adopt the adequate posture<br>
<br>- Place the SYNAPTIC BIT 8 over the table, place it above the top end of your module. Only this BIT will be used, combined with the other therapies we already know.
<br>- This practise must last fifteen minutes. 
<br><br>
HOW TO CORRECTLY CARRY OUT THE MODULE 6 THERAPIES.
<br><br>

1.	Pass the BIT 8 BY Exercises 1,2,3,4 and 5 , Attention, is very important that you keep the BIT en the same posture that you have done it always moving it in vertical direction, don’t change this movement even if the design of the exercises looks to following it. 
<br>2.	Go back to the beginning of the module and make all the exercises using the “Pencil Therapy”
<br>3.	Go back to the beginning of the module and do all exercises using the “the Humming therapy”
<br>4.	Go back to the beginning of the module and do all the exercises in a “free” way, i.e , without BITS or specific therapies. 
<br>5.	Repeat as many times you can do it in fifteen minutes. 
<br><br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.

    
    ";
}elseif ($mod == 8){
    $desc = "
    
    To correctly perform the therapies, follow the steps you already know and that make up the general instructions for all modules.
<br><br>
Adopt the right posture. Attention due to the particularities of this module, the instructions will specify exactly how to perform the exercise on each page. This practice should last fifteen minutes

<br><br>
HOW TO CORRECTLY CARRY OUT THE THERAPIES OF THE MODULES
<br><br>
In this module we combine the therapies for Develop the Peripheral , Centrifugal, Global Reading Field , and the Eye Muscles For the Independization of the senses for which follow the following steps. 
<br><br>
We start with the Therapy for the Peripheral Reading Field Development :
<br><br>
1.	Exercise 1, Pass your eyes vertically through the page, directing your gaze to the center of the design.
<br>2.	Try to continue with the same speed you have already achieved and try, without looking away, to encompass the words that are on the sides of the illustration.
<br>3.	Spend 30 seconds on each of the pages that make up the exercise and write down the number of times the page has traveled at this time.
<br><br>
We continue with the Therapy for the Centrifugal Reading Field Development
<br><br>
1.	Exercise 2, Look through the two spirals that appear on this page, both from the inside out, first to the right and then to the left
<br>2.	Try to continue with the same speed
<br>3.	Spend 30 seconds on each of the two pages that make up the exercise and write down the number of times that each page has traveled at this time.
<br><br>
We continue with the Therapy for the Global Reading Field Development
<br><br>
1.	 Exercise 3 . Roll your eyes vertically across the page, directing your gaze to the center of the design.
<br>2.	Try to cover the text by sets without losing the speed you have already acquired. Also, try to get the general idea of each fragment
<br>3.	Spend 30 seconds on each of the three pages that make up the exercise and write down
<br><br>
We proceed with the Therapy for the Eye Muscles Development
	<br><br>

1.	Exercise 4, pg 18, Scroll through the page. Remember that the movement of your eyes always snaps down and must be so strong that at the end of each column you will see your stomach. Repeat this operation for 30 seconds and write down

<br>2.	Exercise 4 pg 19. Perform the exercise identically to the previous one, but this time turning the page up, so that at the end of each column your eyes hit the point in front of you. Repeat this operation for 30 seconds and write down.

<br>3.	Exercise 4 Pg. 20 Perform the exercise identically to the previous ones, this time following the direction marked by the text; press up and then down etc ... Repeat this operation for 30 seconds and write down

<br>4.	Exercise 4, Page 21. Hold any BIT with your right hand resting on the table about 20 cm from the right of your module, this in order to create a reference point. Pass your gaze through each of the lines that make up the exercise vigorously, so that your eyesight ends up hitting the BIT that you hold to the right. Repeat this operation for 30 seconds and write down.
<br>5.	Exercise 4 pg 22. Perform the same operation as in the previous point, holding the BIT to your left. Repeat this operation for 30 seconds and write down

<br>6.	Exercise 4, page 13, 24. Scroll the page with your eyes following the direction marked by arrows. Repeat this operation for 30 seconds and write down.
<br><br>
We finished with the Therapy for the Independization of the Senses: 
<br><br>
1.	 Exercise 5. Perform the exercise using pencil therapy. Repeat this operation for 30 seconds and write down.
<br>
2.	Exercise 5. Redo the exercise using humming therapy. Repeat this operation for 30 seconds and write down.
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 

    
    ";
}elseif ($mod == 9){
    $desc = "

    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.<br>
<br>- Place the SYNAPTIC BIT 8 over the table, above the top of your module, this will be the only BIT you will need in this Module. 
<br>- This practice should last fifteen minutes 
<br><br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 9: 
<br><br>
In this Module we combine the therapy for this Module of the Receptive Eye Cells for the Independization of the senses. 

<br>-	 Grab the BIT 8 and pass it by Exercises 1,2,3 and 4 to the rhythm that you have already acquired. 
<br>-	Do the exercise 5 using first the “Pencil Therapy” and then the “Humming Therapy”. 
<br>-	Go back to the beginning of the module and do the exercises 1,2, 3 and 4 with “Pencil”. 
<br>-	Do the Exercise 5 once with “Pencil” and the other with “Humming”
<br>-	Go back to the beginning of the Module and do the exercises 1,2,3 and 4 with “Humming”
<br>-	Do the exercise  5 once with “Pencil” and the other “Humming”
<br>-	Go back to the beginning of the Module and do the exercises 1,2,3 and 4 in a “Free” way
<br>-	Do the exercise 5 one time with the “Pencil” and the other one with “Humming”
<br><br>
Repeat as many times as you can within fifteen minutes
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 


    
    ";

}elseif ($mod == 10){
    $desc = "
        
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.<br>
- This Module doesn’t require the use of SYNAPTIC BIT. <br>
- This practice should last fifteen minutes <br>

<br><br>

HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 10: 
<br><br>
In this Module we combine the therapy for this Module of the Horizontal Reading Field for the Independization of the senses beware the following advice for work this module :
<br><br>
-	place your look in the center of the design you are working on <br>
-	Don’t lose the speed that you have gain<br>
-	Try to cover all the lines at a glance<br>
-	Try to comprehend the text<br><br>

1.	Do the Exercises 1,2,3 and 4  , meaning the whole Module by using the “Pencil” therapy”<br>
2.	Go back to the beginning of the Module, do the exercises 1,2,3 ,4 and 5 by using the “Humming therapy”<br>
3.	Go back to the beginning of the Module, do the exercises 1,2,3 ,4 and 5 by using the “Free therapy”<br>
4.	Repeat as many times as you can reach in fifteen minutes<br>

<br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 

    
    ";
}elseif ($mod == 11){
    $desc = "
    
    To correctly carry out  the therapies follow the steps that you already know and that conforms the general instructions for all the modules. 
<br>
<br>- Adopt the adequate stance. 
<br>- Put the SYNAPTIC BITS  number 8th on the table, up the top end of your module. It will only be used this BIT, combined with the other therapies that we already know.
<br>- This practice must last 15 minutes.

<br><br>
HOW TO CORRECTLY CARRY OUT THE MODULE 9 THERAPIES.
<br><br>
In this module we will combine the Therapy for the Development of Vertical Reading with the Therapy for the independization of senses, for this you should follow the next steps.
<br><br>
1.	Take the BIT 8 and pass it by the exercises 1, 2, 3, 4, and 5.
<br>2.	Attention, it’s important that you maintain the BIT in the same posture that you always have been moving it in a vertical direction, do not change the movement even though the design of the exercises may suggest otherwise. 
<br>3.	Go back to the start of the module and do the exercises 1,2,3,4, and 5 using the the ‘Pencil therapy’
<br>4.	Go back to the start of the module and do the exercises 1,2,3,4, and 5 using the ‘Humming therapy’ 
<br>5.	Go back to the start of the module and do the exercises 1,2,3,4, and 5 in  ‘free’ way
<br>6.	Repeat the steps as many times as you are able to in 15 minutes.
<br><br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.


    ";
}elseif ($mod == 12){
    $desc = "
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
-Adopt the right posture.<br>
- Attention, due to the particularities of this module, the instructions will specify exactly how to perform the exercise on each page
<br>-This practice should last fifteen minutes 
<br><br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 12:
<br><br>
In this module we combine Development of the peripheral , centrifugal , global reading field and the superior, inferior, internal, external and oblique muscles and the independization of the sense.  Please follow the following steps. 
<br><br>
We start with the Therapy for the Peripheral Reading Field Development :
<br><br>
1.	Exercise 1, Pass your eyes vertically through the page, directing your gaze to the center of the design.
<br>2.	Try to continue with the same speed you have already achieved and try, without looking away, to encompass the words that are on the sides of the illustration.
<br>3.	Spend 30 seconds on each of the pages that make up the exercise and write down the number of times the page has traveled at this time.
<br><br>
We continue with the Therapy for the Centrifugal Reading Field Development
<br><br>
1.	Exercise 2, Look through the two spirals that appear on this page, both from the inside out, first to the right and then to the left
<br>2.	Try to continue with the same speed
<br>3.	Spend 30 seconds on each of the two pages that make up the exercise and write down the number of times that each page has traveled at this time.
<br><br>
We continue with the Therapy for the Global Reading Field Development
<br><br>
1.	 Exercise 3 . Roll your eyes vertically across the page, directing your gaze to the center of the design.
<br>2.	Try to cover the text by sets without losing the speed you have already acquired. Also, try to get the general idea of each fragment
<br>3.	Spend 30 seconds on each of the three pages that make up the exercise and write down
<br><br>
We proceed with the Therapy for the Eye Muscles Development
	<br><br>

1.	Exercise 4, pg 18, Scroll through the page. Remember that the movement of your eyes always snaps down and must be so strong that at the end of each column you will see your stomach. Repeat this operation for 30 seconds and write down

<br>2.	Exercise 4 pg 19. Perform the exercise identically to the previous one, but this time turning the page up, so that at the end of each column your eyes hit the point in front of you. Repeat this operation for 30 seconds and write down.

<br>3.	Exercise 4 Pg. 20 Perform the exercise identically to the previous ones, this time following the direction marked by the text; press up and then down etc ... Repeat this operation for 30 seconds and write down

<br>4.	Exercise 4, Page 21. Hold any BIT with your right hand resting on the table about 20 cm from the right of your module, this in order to create a reference point. Pass your gaze through each of the lines that make up the exercise vigorously, so that your eyesight ends up hitting the BIT that you hold to the right. Repeat this operation for 30 seconds and write down.
<br>5.	Exercise 4 pg 22. Perform the same operation as in the previous point, holding the BIT to your left. Repeat this operation for 30 seconds and write down

<br>6.	Exercise 4, page 23, 24. Scroll the page with your eyes following the direction marked by arrows. Repeat this operation for 30 seconds and write down.
<br><br>
We finished with the Therapy for the Independization of the Senses: 
<br><br>
1.	 Exercise 5. Perform the exercise using pencil therapy. Repeat this operation for 30 seconds and write down.

<br>2.	Exercise 5. Redo the exercise using humming therapy. Repeat this operation for 30 seconds and write down.
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 

    
    ";
}elseif ($mod == 13){
    $desc = "
    
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.
<br>- Place the SYNAPTIC BIT from 1 to 8 over the table, above the top of your module, this will be the only BIT you will need in this Module. 
<br>- NOTE: Try to read by phrases 
<br>- This practice should last fifteen minutes 

<br><br>

HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 13: 
<br><br>
In this module we combine the therapy for the Develop of the receptive eye cells with the therapy for the sense independization.  Follow the instructions: 
<br><br>
1.	Grab the BIT 2  and perform Exercise 1
2.	Grab the BIT 3 and perform Exercise 2<br>
3.	Grab the BIT 8 and perform Exercise 3<br>
4.	Grab the BIT 4 and perform Exercise 4<br>
5.	Perform the Exercise 5 using the “Pencil therapy”<br>
6.	Grab the BIT 5 and perform the Exercise 1<br>
7.	Grab the BIT 6 and perform Exercise 2<br>
8.	Grab the BIT 8 and perform Exercise 3<br>
9.	Grab the BIT 7 and perform Exercise 4<br>
10.	Perfo the Exercise 5 using the “Humming therapy”<br>
<br>
Like this you’ll complete a cycle with every BIT and each Exercise. Repeat the cycle as many time as you can reach in fifteen minutes. 
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day. 



    ";
}elseif ($mod == 14){
    $desc = "
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.<br>
- Place the SYNAPTIC BIT from 1 to 8 over the table, above the top of your module, this will be the only BIT you will need in this Module. 
<br>- NOTE: Try to read by phrases 
<br>- This practice should last fifteen minutes 
<br><br>
HOW CORRECTLY CARRY OUT THE MODULE 14 THERAPIES
<br><br>
In this Module we will combine the therapy for the Development of the Horizontal Reading Field with the Therapy for the Independization of the Sense:
<br><br>
Please note the following tips for working with the entire module: 
<br><br>
-	Place your eyes in the center of the design you're working on

-	Don't lose the speed you've already acquired <br>

-	Try to cover phrases in one go <br>
-	Try to understand the text<br>

-	Perform Exercises 1,2,3,4 and 5, that is, the entire Module using “Pencil Therapy“.<br>

-	Go back to the beginning of the module, perform all the exercises again using “Humming Therapy“<br>

-	Go back to the beginning of the module, do the five exercises again in a “free“ way<br>

<br>
Repeat as many times you can reach in fifteen minutes<br>
<br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.<br>


    
    ";
}elseif ($mod == 15){
    $desc = "
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.
<br>- Place the SYNAPTIC BIT 8 over the table, above the top of your module . You will only need this BIT combined with the other therapies we already know. 
<br>- This practice should last fifteen minutes 
<br><br>

HOW CORRECTLY CARRY OUT THE MODULE 14 THERAPIES
<br><br>
In this Module we will combine the therapy for the Development of the Vertical Reading Field with the Therapy for the Independization of the Sense so please follow the following steps: 
<br><br>
Attention: Is very important that you keep the BIT in the same posture that you have always done it moving in vertical direction, don’t change the movement even though the design may suggest to. 
<br><br>
1.	Pass the BIT by the Exercises 1 and 2<br>
2.	Perform the Exercise 2 in “free” way<br>
3.	Retake the BIT 8 and perform the Exercises 4 and 5<br>
4.	Go back to the beginning of the Module and perform the exercises 1,2,3,4 and 5 using the “Humming therapy”<br>
5.	Go back to the beginning of the MOdule and perform the Exercises 1,2,3,4 and 5 in “Free” way<br>
Repeat as many times as you can reach in  fifteen minutes.<br>
<br><br>
Your first practice finishes here. Remember that now you must fill in the worksheet, and repeat this practice two times more today.
<br><br>
    
    
    ";
}elseif ($mod == 16){
    $desc = "
    
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.
<br>- Attention, due to the particularities of this module, the instructions will specify exactly how to perform the exercise on each page
<br>- This practice should last fifteen minutes 
<br><br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 16:
<br><br>
In this module we combine Development of the peripheral , centrifugal , global reading field and the superior, inferior, internal, external and oblique muscles and the independization of the sense.  Please follow the following steps. 
<br><br>
We start with the Therapy for the Peripheral Reading Field Development :
<br><br>
1.	Exercise 1, Pass your eyes vertically through the page, directing your gaze to the center of the design.
<br>2.	Try to continue with the same speed you have already achieved and try, without looking away, to encompass the words that are on the sides of the illustration.
<br>3.	Spend 30 seconds on each of the pages that make up the exercise and write down the number of times the page has traveled at this time.
<br><br>
We continue with the Therapy for the Centrifugal Reading Field Development
<br><br>
1.	Exercise 2, Look through the two spirals that appear on this page, both from the inside out, first to the right and then to the left
<br>2.	Try to continue with the same speed
<br>3.	Spend 30 seconds on each of the two pages that make up the exercise and write down the number of times that each page has traveled at this time.
<br><br>
We continue with the Therapy for the Global Reading Field Development
<br><br>
1.	 Exercise 3 . Roll your eyes vertically across the page, directing your gaze to the center of the design.
<br>2.	Try to cover the text by sets without losing the speed you have already acquired. Also, try to get the general idea of each fragment
<br>3.	Spend 30 seconds on each of the three pages that make up the exercise and write down
<br><br>
We proceed with the Therapy for the Eye Muscles Development
	
<br><br>
1.	Exercise 4, pg 18, Scroll through the page. Remember that the movement of your eyes always snaps down and must be so strong that at the end of each column you will see your stomach. Repeat this operation for 30 seconds and write down

<br>2.	Exercise 4 pg 19. Perform the exercise identically to the previous one, but this time turning the page up, so that at the end of each column your eyes hit the point in front of you. Repeat this operation for 30 seconds and write down.

<br>3.	Exercise 4 Pg. 20 Perform the exercise identically to the previous ones, this time following the direction marked by the text; press up and then down etc ... Repeat this operation for 30 seconds and write down

<br>4.	Exercise 4, Page 21. Hold any BIT with your right hand resting on the table about 20 cm from the right of your module, this in order to create a reference point. Pass your gaze through each of the lines that make up the exercise vigorously, so that your eyesight ends up hitting the BIT that you hold to the right. Repeat this operation for 30 seconds and write down.
<br>5.	Exercise 4 pg 22. Perform the same operation as in the previous point, holding the BIT to your left. Repeat this operation for 30 seconds and write down

<br>6.	Exercise 4, page 23, 24. Scroll the page with your eyes following the direction marked by arrows. Repeat this operation for 30 seconds and write down.



<br><br>



We finished with the Therapy for the Independization of the Senses: 
<br><br>
1.	 Exercise 5. Perform the exercise using pencil therapy. Repeat this operation for 30 seconds and write down.

<br>2.	Exercise 5. Redo the exercise using humming therapy. Repeat this operation for 30 seconds and write down.
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day.

    
    
    
    ";
}elseif ($mod == 17){
    $desc = "
    
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.<br>
- This practice should last fifteen minutes <br>
<br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 17:
<br><br>
 Please note the following tips for performing the exercises in the entire module. 
<br><br>
1.	Try to read by parts<br>
2.	Do not decrease the speed you reach <br>
3.	 Try to get the general ideas of the text<br>
<br><br>
In this module we combined the therapy for the Development of the Receptive Eye Cells with the Therapy for the Independization of the Senses , please follow the following steps: 
<br><br>
1.	Perform Exercises 1, 2, 3 and 4 in  “Free way”<br>
2.	Perform the Exercise 5 once with “Pencil” and the other “Humming”<br>
3.	Repeat these steps as many times as you can reach in fifteen minutes. <br>
<br>

Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day.

    
    
    
    ";
}elseif ($mod == 18){
    $desc = "
    
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
<br><br>
- Adopt the right posture.<br>
- This practice should last fifteen minutes 
<br><br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 18:
<br><br>
Attention, keep in mind the following tips to perform the exercises of the whole module: 
<br><br>
Try to read in chunks
<br><br>
Do not slow down the speed you have reached 
<br><br>
Try to get the general ideas from the text
<br><br>
In this module we combine the therapy for the development of the horizontal reading field with the therapy for the independence of the senses, for which we follow these steps: 
<br><br>
Perform Exercises 1.2.3 and 4 in a “free” way . 
<br><br>
Do Exercise 5 once with “Pencil“ and once with “Humming“. 
<br><br>
Repeat these steps as many times as you can in fifteen minutes.  
<br><br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day.

    <br><br>
    
    ";
}elseif ($mod == 19){
    $desc = "
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
 <br><br>
- Adopt the right posture.<br>
- Try to read per fragments<br>
- This practice should last fifteen minutes <br>

<br><br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 17: 
<br><br>
In this module we combine the Therapy for the Development of the Vertical Reading Field with the Therapy for the Independization of the Senses,  for which please follow the following steps: 
<br><br>
1.	Perform Exercises 1,2,3 and 4 in a “free” way<br>
2.	Perform the Exercise 5 once with “pencil” and the other “Humming”<br>
3.	Repeat these steps as many times as you reach within fifteen minutes. <br>
<br><br>
Your first practice ends here. Remember to fill out the worksheet now and repeat this practice twice more today.

    ";
}elseif ($mod == 20){
    $desc = "
    To perform the therapies correctly follow the steps you already know and which make up the general instructions for all the Modules. 
 <br><br>
-Adopt the right posture.<br>
-Try read per fragments<br>
-This practice should last fifteen minutes <br>
 <br>
HOW TO CARRY OUT CORRECTLY THE THERAPIES OF THE MODULE 20:<br><br>

In this MOdule we combine the therapies for the Development of the Peripheral, Centrifugal and Global Reading Field, and the Eye Muscles: with the Therapy for the Sense Independization. Please follow the following steps. 
<br><br>

THERAPY FOR THE DEVELOPMENT OF THE PERIPHERAL READING FIELD: <br><br>
1.	Exercise 1, Page 9 to 12. Roll your eyes vertically across the page, directing your gaze to the center of the design. 
<br>2.	Try to keep up with the same speed that you have already reached and try ,without looking away, embrace the words on the side of the illustration. 
<br>3.	Spend 30 seconds to each of the pages that made up the Exercise. 
<br>4.	Write down the times you went through the page during this time. 
<br><br>
THERAPY FOR THE DEVELOPMENT OF THE CENTRIFUGAL READING FIELD: 
<br><br>
-	Exercise 2 , Page 13 to 15 , scroll through the text with your eyes in the order indicated by the arrows. 
<br>-	Try to keep up with the same speed. 
<br>-	Spend 30 seconds to each of the pages that made up the Exercise.
<br>-	Write down the times you went through the page during this time. 
<br><br>
THERAPY FOR THE DEVELOPMENT OF THE GLOBAL READING FIELD
<br><br>
-	Exercise 3 , Page 16 to 18 Roll your eyes vertically across the page, directing your gaze to the center of the design
<br>-	Try to cover the text by sets without losing the speed you have already acquired. Also, try to get the general idea from each fragment. 
<br>-	Spend 30 seconds to each of the pages that made up the Exercise.
<br>-	Write down the times you went through the page during this time.
<br><br>
THERAPY FOR THE DEVELOPMENT OF THE EYE MUSCLES
<br><br>
-	Exercise 4, Page 19. Look around the page. Remember that the movement of your eyes will always be downwards, and should be so strong that at the end of each column you will be able to see your stomach. Spend 30 seconds on this page and write it down. 
<br>-	Exercise 4, Page 20 Do the exercise in the same way as before, but this time going up the page, so that at the end of each column your eyes hit the point in front of you. Spend 30 seconds on this page and write it down.
<br>-	Exercise 4 , Page 21. Do the exercise in the same way as before,this time following the direction of the text; first down and then up etc. Spend 30 seconds ob this page and write it down. 
<br>-	Exercise 4. Page 22. Hold the BIT with the right hand leaning on the table about 20 cm to the right of its module, in order to create a reference point. Pass your gaze along each of the lines that make up the exercise in an energetic way, so that your sight ends up “hitting“ the BIT you are holding on the right. Repeat for 30 seconds and score. 
<br>-	Exercise 4. Page 23. Perform the same operation as in the previous point, holding the BIT on your left. 
<br>-	Exercise 4, Page 24. Look at the page in the direction of the arrows for 30 seconds and write it down. 
<br><br>
INDEPENDIZATION OF THE SENSES
<br><br>
-	Exercise 5, Page 25. Perform the Exercise using the “Pencil therapy”<br>
-	Exercise 5 , Page 25. Re-do the exercise using the “Humming Therapy”<br>
<br>
Your first practice ends here. Remember that now you need to fill in your worksheet and repeat twice times more in the day.

    ";
}elseif ($mod == 21){
    $desc = "
    
    In this case you already have the knowledge about all the necessary tools and techniques for read CORRECTLY, henceforth we are not going to indicate a precisely methodology, however , we remind you some important highlights. 
<br><br>
-Adopt the right posture, the one that allows you to be comfortable, concentrate on the text, and use your look and your movements as you know them.
<br><br>
- look through the center of the column you are reading 
<br><br>
- Maintain the speed you have developed throughout the course
<br><br>
- Read paragraph by paragraph, practice growing fixation
<br><br>
Spend the time and don't let other distractions deprive you of the pleasure of reading

    
    ";
}elseif ($mod == 22){
    $desc = "
    
    In this case you have the knowledge about all the necessary tools and techniques to read PROPERLY, henceforth  we are not going to indicate you and specific methodology, nonetheless, we remind you some important points: 
<br><br>
- Adopt the right posture, the one that allows you to be comfortable, concentrate on the text, and use your look and your movements as you know them.
 <br><br>
- look through the center of the column you are reading 
 <br><br>
- Maintain the speed you have developed throughout the course
 <br><br>
- Read paragraph by paragraph, practice growing fixation
 <br><br>
- Spend the time and don't let other distractions deprive you of the pleasure of reading 

    
    ";
}elseif ($mod == 23){
    $desc = "
    In this case you have the knowledge about all the necessary tools and techniques to read PROPERLY, henceforth  we are not going to indicate you and specific methodology, nonetheless, we remind you some important points: 
 <br><br>
-Adopt the right posture, the one that allows you to be comfortable, concentrate on the text, and use your look and your movements as you know them.
  <br><br>
- look through the center of the column you are reading 
  <br><br>
-Maintain the speed you have developed throughout the course
  <br><br>
-Read paragraph by paragraph, practice growing fixation
  <br><br>
-Spend the time and don't let other distractions deprive you of the pleasure of reading 

    ";
}elseif ($mod == 24){
    $desc = "
    In this case you already have the knowledge about all the necessary tools and techniques in order to CORRECTLY read , therefore we are not going to indicate a strict Methodology, however, we remind you of some important points. 
 <br><br>

- Adopt the right posture, the one that allows you to be comfortable, concentrate on the text, and use your look and your movements as you know them.
 <br><br>
- look through the center of the column you are reading 
  <br><br>
- Keep up the speed you have developed throughout the course
  <br><br>
- Read paragraph by paragraph, practice increasing fixation
  <br><br>
Spend the time and don't let other distractions deprive you of the pleasure of reading 



    ";
}

?>









<style>
    body{
        overflow: hidden !important;
        background: url(https://mindstothe2.com/img/back1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .cargando{
        position: absolute;
        width: 100%;
        height: 100vh;
        background: #000;
        top: 0px;
        left: 0px;
        z-index: 999999999999999999;
        font-family: 'Roboto', sans-serif;
    }

    video{
        display:block;
        position: absolute;
        width: 800px;
        height: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .playbutton{

        position: absolute;
        width: 800px;
        height: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 9999999;
    }
    .playbutton .play{
        position: absolute;
        width: 800px;
        height: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 9999999;
    }
    .playbutton .play img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        cursor: pointer;
    }

    .popup{
        display: none;
        position: absolute;
        width: 800px;
        height: 600px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        text-align: center;
        z-index: 9999999;
    }

    .popup .titulo{
        background: #234ebe;
        width: 100%;
        height: 60px;
        color: #fff;
        margin: 0px;
        padding-top: 30px;
    }

    .popup .footer{
        background: #e1e1e1;
        height: 100px;
        position: absolute;
        bottom: 0px;
        left: 0px;
        width: 100%;
    }
    .popup .footer h1{
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        margin-top: 23px;
        margin-bottom: 10px;
        font-size: 32px;
        width: 75%;
    }
    .popup .footer p{
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 16px;
        width: 75%;
    }
    .popup .footer button{
        position: absolute;
        bottom: 30px;
        right: 10px;
        background: red;
        border: none;
        font-size: 25px;
        color: white;
        padding-left: 25px;
        padding-right: 25px;
        padding-top: 5px;
        padding-bottom: 5px;
        cursor: pointer;
    }
    .loading{
        display: none;
    }



    .bateria{
        position: absolute;
        width: 100vw;
        height: 3px;
        background: red;
        top: 0px;
        left: 0px;
        right: 0px;
        z-index: 99999999999999999;
    }



    .descripcion{
        width: 625px;
        height: 230px;
        overflow-x: hidden;
        overflow-y: scroll;
        text-align: justify;
        padding: 85px;
        margin-top: 5px;
    }

    .descripcion::-webkit-scrollbar {
        width: 8px;     /* Tamaño del scroll en vertical */
        height: 8px;    /* Tamaño del scroll en horizontal */
    }

    /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
    .descripcion::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 4px;
    }
    /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
    .descripcion::-webkit-scrollbar-thumb:hover {
        background: #b3b3b3;
        box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
    }
    /* Cambiamos el fondo cuando esté en active */
    .descripcion::-webkit-scrollbar-thumb:active {
        background-color: #999999;
    }

    .descripcion::-webkit-scrollbar-track {
        background: #e1e1e1;
        border-radius: 4px;
    }
    /* Cambiamos el fondo cuando esté en active o hover */
    .descripcion::-webkit-scrollbar-track:hover,
    .descripcion::-webkit-scrollbar-track:active {
        background: #d4d4d4;
    }

</style>

<div class="bateria">

</div>


<div class="cargando">




    <div id="wrapper loading" class="loading">

        <div class="profile-main-loader">
            <div class="loader">
                <svg class="circular-loader"viewBox="25 25 50 50" >
                    <circle class="loader-path" cx="50" cy="50" r="20" fill="none" stroke="#000" stroke-width="2" />
                </svg>
            </div>
        </div>

    </div>











        <?php
            if($total > 0){
                ////ocultar video
        ?>
        <div class="popup" style="display: block;">
        <?php

            }else{

        ?>
    <div class="playbutton">
        <div class="play">
            <img src="https://mindstothe2.com/img/play.png" alt="">
        </div>
    </div>
    <video id="video" onended="finalizado()">
        <source src="https://mindstothe2.com/en/web/video/<?php echo $_GET['modulo']; ?>.mp4" type="video/mp4">
        Su navegador no es apto para esta aplicación.
    </video>
    <div class="popup">
            <?php

            }

        ?>





        <h2 class="titulo">REMEMBER THAT FOR THIS MODULE YOU MUST:</h2>
        <div style="" class="descripcion">
            <?php echo $desc; ?>
        </div>
        <div class="footer">
            <h1>Ready to start?</h1>
            <p class="otroMensaje">The exercise will last 15 minutes. </p>
            <button id="comenzarEjercicio">Start</button>
        </div>
    </div>

    <div class="popup2">
        <h1>Time is up.</h1>
        <p>Excellent, exercise finished!</p>

    </div>

</div>


<input type="hidden" value="<?php echo $_GET['user']; ?>" id="userID">
<input type="hidden" value="<?php echo $_GET['modulo']; ?>" id="moduloID">

<div class="lectorSafari">
<div class="ocultar" style="display: none;">

    <h1 class="tEjercicio" style="
    position: absolute;
    margin: 0px;
    padding: 0px;
    padding-top: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
    top: 0px;
    left: 0px;
    width: 162px;
    border-bottom-right-radius: 15px;
    background: #fff;
    font-size: 18px;
"></h1>



    
    <div style="display:none;">
        <img src="https://mindstothe2.com/img/bit/bit1.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit2.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit3.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit4.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit5.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit6.png" alt="">
        <img src="https://mindstothe2.com/img/bit/bit7.png" alt="">
    </div>

<div class="lector">
    <div id="drag"></div>
<?php

$modulo = ABMEjercicio::find()->where('idModulo='.$modulo)->orderBy('posicion')->all();
$total = 0;
foreach ($modulo as $row) {
    $total++;
    echo '<img id="pagina'.$row->posicion.'" class="pagina lazyload is-hidden" src="'.$row->url.'" alt="" 
    data-b1="'.$row->b1.'" 
    data-b2="'.$row->b2.'" 
    data-b3="'.$row->b3.'" 
    data-b4="'.$row->b4.'" 
    data-b5="'.$row->b5.'" 
    data-b6="'.$row->b6.'" 
    data-b7="'.$row->b7.'" 
    data-b8="'.$row->b8.'" 
    data-tl="'.$row->tl.'" 
    data-tt="'.$row->tt.'" 
    />';

}

?>
    <input type="hidden" id="paginasTotal" value="<?php echo $total; ?>"/>
</div>

    <div id="recolector" style="display:none;">
        <p style="
    position: absolute;
    bottom: 42px;
    right: 75px;
    color: #fff;
">Times his eyes passed: </p>

        <input type="text" class="cajaRecolectora" style="position: absolute;bottom: 55px;right: 25px;width: 35px;">

    </div>

    <button id="siguiente">Continue</button>



    <h1 id="pantalla" style="display: none;
    position: absolute;
    font-size: 14px;
    font-weight: bold;
    bottom: 0px;
    width: 100%;
    color: red;
    font-family: 'Roboto', sans-serif;"></h1>

    <h1 id="paginador" style="display: none;
    position: absolute;
    font-size: 14px;
    font-weight: bold;
    bottom: 25px;
    width: 80%;
    color: red;
    font-family: 'Roboto', sans-serif;">PAGE: 1</h1>
    <button id="siguiente2" style="display: none; position:absolute; top: 50px;">Continue</button>


</div>
</div>







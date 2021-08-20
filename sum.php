<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum it up!</title>
</head>
<body id="background">
    <main> 
        <section class="chat-box">
            <?php 
                $inputNum = $_POST['usercalc'];
                if ($inputNum == $_SESSION['sums']) {
                    echo "<h1 id='correct'> Oh that's right, thanks! </h1>";

                } else {
                    echo "<h1 id='incorrect'> What? Umm that doesn't seem right. <br> Try again </h1>";

                }
            ?>

        </section>
        <section  id="btn-section">
        <button id="myBtn" class="hidden"> Sigh okay</button>
        <button id="myBtn1" class="hidden"> No problem!</button>
        </section>
    </main>

    
</body>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab&display=swap');
    
    * {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
    }

    html {
    font-size: 62.5%;
    box-sizing: border-box;
    }

    body {
    font-weight: 400;
    font-family: 'Lato', sans-serif;
    height: 100vh;
    color: #3c3633;
    background-color:#e4dedb;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    main {
        position: relative;
        width: 100rem;
        height: 60rem;
        display: flex;
        flex-direction:column;
        align-items: center;
        justify-content: center;
    }

    h1{
        font-size: 4rem;
        letter-spacing: 0.2rem;

    }

    .chat-box{
        width:90%;
        margin: 1rem;
        height: 30%;
        background-color: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(200px);
        filter: blur();
        box-shadow: 0 1rem 5rem rgba(0, 0, 0, 0.15);
        border-radius: 9px;
        display:flex;
        align-items: center;
        justify-content: center;
        text-align:center;
    }
    .green {
        background-color:#36763b;
        color:white
    }
    .red {
        background-color:#d93f3f;
        color:white
    }
    .hidden{
        display:none
    }
    #btn-section{
        width:90%;
        margin: 1rem;
        height: 30%;
        display:flex;
        align-items: center;
        justify-content: center;
    }

    button{
        width:30rem;
        height:10rem;
        border-radius: 9px;
        border:none;
        color:white;
        font-weight: 700;
        font-family: 'Raleway', sans-serif;
        font-size: 2.5rem;
        letter-spacing: 0.3rem;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.25);
        transition: transform .1s 
    }
    button:hover{

        transition: all 0.2s ease-in-out;
        transform: translate(0, -0.5rem)
        }

    #myBtn1{
        background-color: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(200px);
        filter: blur();

    }

    #myBtn {
        background-color: #3c3633;

    }


</style>
<script>
    const bg = document.getElementById('background');
    const btn = document.getElementById('myBtn');
    const btn1 = document.getElementById('myBtn1');
    const correct = document.getElementById('correct');
    const incorrect = document.getElementById('incorrect');
    if (correct) {

        bg.classList.add('green');
        btn1.classList.remove('hidden');

    } else if (incorrect) {

        bg.classList.add('red');
        btn.classList.remove('hidden');
        
    }
        btn.addEventListener('click', function() {
        document.location.href = 'index.php';
        });
        btn1.addEventListener('click', function() {
        document.location.href = 'index.php';
        });
</script>
</html>

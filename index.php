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
<body>
    <main> 
        <section class="chat-box" id="welcome">
            <h2>Hello random person,</h2>
            <p>Uhhh I'm too lazy to use calculator, can you add those for me?</p>
        </section>
        <section class="chat-box" id="numbers">
            <?php 
                $num1 = rand(1,100);
                $num2 = rand(1,100);
                $suma = $num1 + $num2;
                $_SESSION['sums'] = $suma;
                echo '<h4 id="one">' . $num1 . '</h4>';
                echo '<h4> + </h4>';
                echo '<h4 id="two">' . $num2 . '</h4>';
            ?>
        </section>
        <section class="chat-box" id="send">
            <form action="sum.php" method="post">

                <input type="number" name="usercalc" id="id">
                <br>
                <button type="submit">There you go!</button>
            </form>
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

    .chat-box{
        width:90%;
        margin: 1rem;
        height: 30%;
        background-color: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(200px);
        filter: blur();
        box-shadow: 0 1rem 5rem rgba(0, 0, 0, 0.15);
        border-radius: 9px;
        display:flex
    }
    h2{
        font-size: 6rem;
        font-style: italic;
        font-family: 'Raleway', sans-serif;
        margin-bottom: 2rem;
        color:#1e52c3
    }
    p{
        font-size: 2.3rem;
        
    }


    #welcome{
        flex-direction:column;
        align-items: center;
        justify-content: center;

    }
    #numbers{
        
        align-items: center;
        justify-content: space-evenly;
        font-size: 5rem;

    }
    #send{
        flex-direction:column;
        align-items: center;
        justify-content: center;
    }
    form{
        width:100%;
        height:auto;
        display:flex;
        align-items: center;
        justify-content: space-evenly;
    }
    input{
        width:30rem;
        height:12rem;
        text-align: center;
        border-radius: 9px;
        background-color: white;
        opacity: 0.7;
        border:none;
        color:#d93f3f;
        font-size:4rem;
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.25);
    }
    button{
        width:30rem;
        height:12rem;
        position:relative;
        border-radius: 9px;
        border:none;
        background-color: #1e52c3;
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
    .pink{
        color:#d498b4
    }
    .yellow{
        color:#e3b553
    }
    .red{
        color:#d93f3f
    }
    .green{
        color:#36763b
    }

</style>
<script>

    const first = document.getElementById('one');
    const second = document.getElementById('two');
    if (first.textContent > 0 && first.textContent <= 20) {

        first.classList.add('pink');

    } else if (first.textContent > 20 && first.textContent <= 40) {

        first.classList.add('yellow');
    } else if (first.textContent > 40 && first.textContent <= 60) {
        
        first.classList.add('red');
    } else if (first.textContent > 60 && first.textContent <= 80) {
        
        first.classList.add('green');
    }
    
    if (second.textContent > 0 && second.textContent <= 20) {

        second.classList.add('red');

    } else if (second.textContent > 20 && second.textContent <= 40) {

        second.classList.add('green');
    } else if (second.textContent > 40 && second.textContent <= 60) {

        second.classList.add('pink');
    } else if (second.textContent > 60 && second.textContent <= 80) {

        second.classList.add('yellow');
    }
    
</script>
</html>
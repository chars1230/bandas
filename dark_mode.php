<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo Oscuro</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <article class="card">
            <div class="image">
                <img src="img/pexels-pixabay.jpg" alt="Explosión en el espacio">
            </div>
            <div class="row">
                <h1>Modo oscuro</h1>
                <input type="checkbox" name="theme" id="theme">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto debitis delectus quasi quas nihil obcaecati vero eum labore! Accusantium ipsam magnam praesentium reprehenderit illo eaque sunt, velit laboriosam aperiam ducimus.</p>
            </div>
        </article>
    </div>
    <script src="js/main.js"></script>
    <script>
        const bdark = document.querySelector('#dark');
        const body = document.querySelector('body');

        load();

        bdark.addEventListener('change', e =>{
            body.classlist.toggle('theme');
            store(body.classlist.contains('dark'));
        });
        function load() {
            const darkmode = localStorage.getItem('light');

            if(!dark_mode){
                store('false');
            }else if(dark_mode == 'true');

            
        }

        function store(value) {
            localStorage.setItem('dark',value);
        }
    </script>
    
</body>
</html>
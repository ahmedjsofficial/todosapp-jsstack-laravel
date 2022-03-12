<!doctype html>
<html lang="en">
<head>
    <title>Todo Dev App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>
<body>

    <div class="bg_theme"></div>

    <div class="container op-zindex">
        <div class="index_content">
            <div class="theme_index">
                <div class="grid_box">
                    <div class="title_box grid_box">
                        <h2 class="index_title">Welcome to JSDEV. To Do App</h2>
                        <img src="{{ asset('images/man.svg') }}" width="350" height="350" class="index_img" />
                        <a href="/login" class="index_button_link">
                            <button type="button" class="button_theme">Go to ToDos Dashboard</button>
                        </a>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy; JSDEV. All reserved rights 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
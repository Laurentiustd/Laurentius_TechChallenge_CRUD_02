<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abous Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,700&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="addStaff-container">

        <nav>
            <div class="navbar-container">
                <div class="nav-logo">
                    <h1>Library.co</h1>
                </div>
                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="/aboutUs">About Us</a>
                        </li>
                        <li>
                            <a href="/showStaff">Show Staff</a>
                        </li>
                        <li>
                            <a href="/addStaff">Add Staff</a>
                        </li>
                        <li>
                            <a href="/contactUs">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 style="text-align: center; margin-top: 3em;">Add New Staff Data</h1>
        <form class="m-5" action="/storeStaff" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Staff Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Staff Age</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="age">
                @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Staff Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Staff Number</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="number">
                @error('number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Staff Position</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="position">
                @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>


        <footer>
            <div class="footer-container">
                <div class="footer-top">
                    <div class="footer-left">
                        <h1>Library.co</h1>
                        <p>Library.co@companies.id</p>
                        <p>+62-812-345-678</p>
                    </div>
                    <div class="footer-right">
                        <h2>Social Media</h2>
                        <ul>
                            <li><i class="fa fa-instagram"></i><a href="#">Instagram</a></li>
                            <li><i class="fa fa-facebook"></i><a href="#">Facebook</a></li>
                            <li><i class="fa fa-linkedin"></i><a href="#">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span></span>
                    <p>Copyright 2023 Library.co, All right reserved</p>
                    <span></span>
                </div>
            </div>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>

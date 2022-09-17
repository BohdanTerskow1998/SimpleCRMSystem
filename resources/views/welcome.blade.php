<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script type="text/javascript" src="/js/jQuery.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 align="center">Simple CRM-system</h1>
    <div class="container">

        <form id="form">
            Name: <input type="text" id="name" name="name" required="required" placeholder="Ivan Ivanov" class="form-control"> <br />
            Email: <input type="text" id="email" name="email" required="required" placeholder="ivan@gmail.com" class="form-control"> <br />
            Level: <input type="text" id="level" name="level" required="required" placeholder="senior" class="form-control"> <br />
            Experience: <input type="text" id="experience" required="required" name="experience" placeholder="7" class="form-control"> <br />
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-success" name="btn">SEND USER'S INFORMATION</button>
            </div>
        </form>
    </div>

    <div class="table" align="center">
        @include('list')
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#form").on("submit", function(e) {
                e.preventDefault();
                let name = $("#name").val();
                let email = $("#email").val();
                let level = $("#level").val();
                let experience = $("#experience").val();

                $.ajax({
                    url: "/",
                    type: "POST",
                    data: {
                        "_token" : "{{csrf_token()}}",
                        name: name,
                        email: email,
                        level: level,
                        experience: experience
                    },
                    success: function(data) {
                        alert(data.success);
                    }
                })
            })
        })
    </script>

</body>
</html>
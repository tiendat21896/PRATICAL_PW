<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
<div class=container>
    <h1 style="text-align: center">SURVEY STUDENT</h1>
    <form id="contactForm">
        <div class="form-group">
            <label><b>Student Name</b></label>
            <input type="text" name="student_name" class="form-control"  id="student_name">
        </div>

        <div class="form-group">
            <label><b>Student Email</b></label>
            <input type="text" name="student_email" class="form-control"  id="student_email">
        </div>

        <div class="form-group">
            <label><b>Student Telephone</b></label>
            <input type="text" name="student_telephone" class="form-control"  id="student_telephone">
        </div>

        <div class="form-group">
            <label><b>Feedback</b></label>
            <textarea class="form-control" name="feedback"  id="feedback"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        student_name = $('#student_name').val();
        student_email = $('#student_email').val();
        student_telephone = $('#student_telephone').val();
        feedback = $('#feedback').val();

        $.ajax({
            url: "/survey",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                student_name:student_name,
                student_email:student_email,
                student_telephone:student_telephone,
                feedback:feedback,
            },
            success:function(response){
                alert('Send form success');
                $("#contactForm")[0].reset();
            },
        });
    });
</script>
</body>
</html>



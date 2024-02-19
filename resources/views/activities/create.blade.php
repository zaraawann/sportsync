<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="container mt-5">
    <h1>Create Activity</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="sport" class="form-label">Sports</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="volley" id="volley">
                <label class="form-check-label" for="volley">Volley ⚽</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="throwball" id="throwball">
                <label class="form-check-label" for="throwball">Throwball 🏐</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="cricket" id="cricket">
                <label class="form-check-label" for="cricket">Cricket 🏏</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="hockey" id="hockey">
                <label class="form-check-label" for="hockey">Hockey 🏑</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="badminton" id="badminton">
                <label class="form-check-label" for="badminton">Badminton 🏸</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="sports[]" value="swimming" id="swimming">
                <label class="form-check-label" for="swimming">Swimming 🏊</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="availability" class="form-label">Availability</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Monday" id="monday">
                <label class="form-check-label" for="monday">Monday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Tuesday" id="tuesday">
                <label class="form-check-label" for="tuesday">Tuesday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Wednesday" id="wednesday">
                <label class="form-check-label" for="wednesday">Wednesday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Thursday" id="thursday">
                <label class="form-check-label" for="thursday">Thursday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Friday" id="friday">
                <label class="form-check-label" for="friday">Friday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Saturday" id="saturday">
                <label class="form-check-label" for="saturday">Saturday</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="availability[]" value="Sunday" id="sunday">
                <label class="form-check-label" for="sunday">Sunday</label>
            </div>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Add Activity</button>
        </div>
        
    </form>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
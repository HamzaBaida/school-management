<h1>Add Student</h1>

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    <input type="text" name="name" placeholder="Name">
    <br><br>

    <input type="email" name="email" placeholder="Email">
    <br><br>

    <input type="text" name="phone" placeholder="Phone">
    <br><br>

    <input type="text" name="section" placeholder="Section">
    <br><br>

    <button type="submit">Save</button>

</form>
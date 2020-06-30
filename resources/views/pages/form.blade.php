@extends('layouts.main')

@section('title', 'Register Form')

@section('main')
  <h1>Buat Account Baru!</h1>

  <h3>Sign Up Form</h3>
  <form action="welcome" method="post">
    @csrf
    <label for="firstName">First Name: </label> <br>
    <input type="text" name="firstName" required /> <br>
    <br>
    <label for="lastName">Last Name: </label> <br>
    <input type="text" name="lastName" required /> <br>
    <p>
      Gender <br>
      <input type="radio" name="gender" value="male" required> <label for="male">Male</label> <br>
      <input type="radio" name="gender" value="female"> <label for="female">Female</label> <br>
      <input type="radio" name="gender" value="other"> <label for="other">Other</label>
    </p>

    <p>
    Nationality: <br>
      <select name="nationality" required>
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
      </select>
    </p>

    Language Spoken:
    <p>
      <input type="checkbox" name="language[]" value="indonesian"> <label for="indonesian">Indonesian</label> <br>
      <input type="checkbox" name="language[]" value="english"> <label for="english">English</label> <br>
      <input type="checkbox" name="language[]" value="other"> <label for="other">Other</label>
    </p>
    Bio: <br>
    <textarea name="bio" rows="8" cols="35" required></textarea> <br>
    <button> Sign Up </button>
  </form>
@endsection

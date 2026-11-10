<!DOCTYPE html>
<html><head><title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="bg-light">
<div class="container mt-5" style="max-width:400px">
<div class="card p-4 shadow"><h3 class="text-center mb-3">Admin Login</h3>
@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
<form method="POST" action="/admin/login">@csrf
<label>Email</label><input name="email" class="form-control mb-3" required>
<label>Password</label><input name="password" type="password" class="form-control mb-3" required>
<button class="btn btn-primary w-100">Login</button>
</form></div></div></body></html>
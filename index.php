<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LinkedIn Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">Linked<span class="in">in</span></div>
    <div class="login-form">
      <h1>Sign in</h1>
      <p>Stay updated on your professional world.</p>
      <form>
        <div class="input-group">
          <label for="email">Email or phone</label>
          <input type="text" id="email" name="email" placeholder="Email or phone">
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Password">
          <a href="#" class="show-password">Show</a>
        </div>
        <a href="#" class="forgot-password">Forgot password?</a>
        <div class="remember-me">
          <input type="checkbox" id="remember">
          <label for="remember">Keep me logged in</label>
        </div>
        <button type="submit" class="btn-primary">Sign in</button>
      </form>
      <div class="divider">or</div>
      <button class="btn-google">Continue with Google</button>
      <button class="btn-apple">Sign in with Apple</button>
      <p class="agreement">
        By clicking Continue, you agree to LinkedIn’s 
        <a href="#">User Agreement</a>, 
        <a href="#">Privacy Policy</a>, and 
        <a href="#">Cookie Policy</a>.
      </p>
    </div>
  </div>
</body>
</html>

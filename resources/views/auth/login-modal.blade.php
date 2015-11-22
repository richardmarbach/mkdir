<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header" style="padding:35px 50px;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <img src="C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\global\mkdir_logo.png"
      style="width:100%;"/>
    </div>
    <div class="modal-body" style="padding:40px 50px;">
      <form role="form">
        <div class="form-group">
          <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
          <input type="text" class="form-control" id="usrname" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
          <input type="text" class="form-control" id="psw" placeholder="Enter password">
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="" checked>Remember me</label>
        </div>
          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
      </form>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
      <p>Not a member? <a href="#">Sign Up</a></p>
      <p>Forgot <a href="#">Password?</a></p>
    </div>
  </div>

  </div>
  </div>
  <script>
$(document).ready(function(){
    $("#login").click(function(){
        $("#loginModal").modal();
    });
});
</script>

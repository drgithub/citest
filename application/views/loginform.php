<?php
$islogfail = isset($this->session->userdata['login']);
?>
<form class="right hide-on-med-and-down red-text" action="members/login" method="post">
    <div class="input-field col">
        <i class="material-icons prefix">mail</i>
        <input name="email" id="email" type="email" class="validate" value="
        <?php
        if ($islogfail) {
            echo $this->session->userdata['login']['email'];
        }
        ?>" required>
        <label for="email">E-mail</label>
    </div>
    <div class="input-field col">
        <i class="material-icons prefix red-text">lock</i>
        <input name="password" id="password" type="password" class="validate" required>
        <label for="password">Password</label>
    </div>
    <button class="btn waves-effect waves-light red white-text" type="submit" name="action">Log-In
        <i class="material-icons right">send</i>
    </button>
</form>
<form class="side-nav" id="nav-mobile" action="members/login" method="post">
    <div class="row black-text">
        <div class="input-field col">
            <i class="material-icons prefix red-text">mail</i>
            <input name="email" id="email" type="email" class="validate white-text" value="<?php
            if ($islogfail) {
                echo $this->session->userdata['login']['email'];
            }
            ?>" required>
        </div>
        <div class="input-field col">
            <i class="material-icons prefix red-text">lock</i>
            <input name="password" id="password" type="password" class="validate white-text" required>
        </div>
        <div class="row grey darken-3">
            <button class="btn-large waves-effect waves-light red white-text right " type="submit" name="action">Log-In
                <i class="material-icons">send</i>
            </button>
        </div>
    </div>
</form>
<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text">menu</i></a>
<?php
if($islogfail){
    $this->session->unset_userdata('login');
}
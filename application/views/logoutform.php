<form class="right hide-on-med-and-down red-text" action="members/logout" method="post">
    <div class="col">
        <i class="material-icons prefix">perm_identity</i>
        <?php
        echo $this->session->userdata['userlogin']['lname'] . ", " . $this->session->userdata['userlogin']['fname']
        ?>
    </div>
    <button class="btn waves-effect waves-light red white-text" type="submit" name="action">Log-Out
        <i class="material-icons right">open_in_browser</i>
    </button>
</form>
<form class="side-nav grey darken-3" id="nav-mobile" action="members/logout" method="post">
    <div class="col">
        <i class="material-icons prefix">perm_identity</i>
        <?php
        echo $this->session->userdata['userlogin']['lname'] . ", " . $this->session->userdata['userlogin']['fname']
        ?>
    </div>
    <button class="btn waves-effect waves-light red white-text" type="submit" name="action">Log-Out
        <i class="material-icons right">open_in_browser</i>
    </button>
</form>
<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text">menu</i></a>
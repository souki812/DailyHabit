                <div class="col-xs-3">
                    <nav>
                        <ul class="nav nav-pills nav-stacked">
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>><a href="../">Home</a></li>
                            <li <?php if ($_SERVER['REQUEST_URI'] == '/activity.php') echo 'class="active"'; ?>><a href="../activity.php">Activity</a></li>
                            <li><a href="../logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>

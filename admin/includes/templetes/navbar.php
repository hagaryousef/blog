<div>
    <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="dashboard.php">- Admin Dashboard -</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="dashboard.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="category.php">Topics</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="items.php">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="member.php?action=manage">Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="comments.php">Comments</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../index.php">Visit the shop</a>
                <a class="dropdown-item" href="member.php?action=edit&userid=<?php echo $_SESSION['ID'] ?>">Edit profile</a>
                <a class="dropdown-item" href="logout.php">logout</a>
                
                </div>
            </li>
        
        </ul>
        
    </div>
    </nav>
</div>
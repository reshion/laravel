
<div class="navbar-header">
    <button  type="button" id="navibutton" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<nav  class="collapse navbar-collapse bs-navbar-collapse"  role="navigation">
    
    
   
    <ul class="nav navbar-nav">
        <li ng-class="{true: 'active', false: ''}[status.current.activeTab == 'home']" ><a href="/home">Home</a></li>
        <li ng-class="{true: 'active', false: ''}[status.current.activeTab == 'about']" ><a href="/about">About</a></li>
        <li ng-class="{true: 'active', false: ''}[status.current.activeTab == 'project']" ><a href="/project">Projects</a></li>
        <li ng-class="{true: 'active', false: ''}[status.current.activeTab == 'article']" ><a href="/article">Article</a></li>
    </ul>

</nav>


<!-- SIDE MENU -->
<div id="dashboard-options-menu" class="side-menu dashboard left closed">
    <!-- SVG PLUS -->
	<svg class="svg-plus">
		<use xlink:href="#svg-plus"></use>
	</svg>
	<!-- /SVG PLUS -->
    
	<!-- SIDE MENU HEADER -->
	<div class="side-menu-header">
		<!-- USER QUICKVIEW -->
		<div class="user-quickview">
			<!-- USER AVATAR -->
			<a href="author-profile.html">
			<div class="outer-ring">
				<div class="inner-ring"></div>
				<figure class="user-avatar">
					<img src="{{ asset('frontend/images/avatars/avatar_01.jpg') }}" alt="avatar">
				</figure>
			</div>
			</a>
			<!-- /USER AVATAR -->

			<!-- USER INFORMATION -->
			<p class="user-name">Johnny Fisher</p>
			<p class="user-money">$745.00</p>
			<!-- /USER INFORMATION -->
		</div>
		<!-- /USER QUICKVIEW -->
	</div>
	<!-- /SIDE MENU HEADER -->

	<!-- SIDE MENU TITLE -->
	<p class="side-menu-title">Your Account</p>
	<!-- /SIDE MENU TITLE -->

	<!-- DROPDOWN -->
	<ul class="dropdown dark hover-effect interactive">
		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-settings.html">
                <span class="sl-icon icon-settings"></span>
                Account Settings
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-notifications.html">
                <span class="sl-icon icon-star"></span>
                Notifications
            </a>
            <!-- PIN -->
            <span class="pin soft-edged big primary">49</span>
            <!-- /PIN -->
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item interactive">
			<a href="#">
                <span class="sl-icon icon-envelope"></span>
                Messages
                <!-- SVG ARROW -->
				<svg class="svg-arrow">
					<use xlink:href="#svg-arrow"></use>
				</svg>
				<!-- /SVG ARROW -->
			</a>

			<!-- INNER DROPDOWN -->
			<ul class="inner-dropdown">
				<!-- INNER DROPDOWN ITEM -->
				<li class="inner-dropdown-item">
					<a href="dashboard-inbox.html">Your Inbox (36)</a>
					<!-- PIN -->
					<span class="pin soft-edged secondary">2</span>
					<!-- /PIN -->
				</li>
				<!-- /INNER DROPDOWN ITEM -->

				<!-- INNER DROPDOWN ITEM -->
				<li class="inner-dropdown-item">
					<a href="dashboard-inbox-v2.html">Your Inbox (36) V2</a>
				</li>
				<!-- /INNER DROPDOWN ITEM -->

				<!-- INNER DROPDOWN ITEM -->
				<li class="inner-dropdown-item">
					<a href="dashboard-openmessage.html">Open Message</a>
				</li>
				<!-- /INNER DROPDOWN ITEM -->

				<!-- INNER DROPDOWN ITEM -->
				<li class="inner-dropdown-item">
					<a href="dashboard-inbox.html">Starred Message</a>
				</li>
				<!-- /INNER DROPDOWN ITEM -->

				<!-- INNER DROPDOWN ITEM -->
				<li class="inner-dropdown-item">
					<a href="dashboard-inbox.html">Deleted Messages</a>
				</li>
				<!-- /INNER DROPDOWN ITEM -->
			</ul>
			<!-- INNER DROPDOWN -->

            <!-- PIN -->
            <span class="pin soft-edged big secondary">!</span>
            <!-- /PIN -->
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-purchases.html">
                <span class="sl-icon icon-tag"></span>
                Your Purchases
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-buycredits.html">
                <span class="sl-icon icon-credit-card"></span>
                Buy Credits
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->
	</ul>
	<!-- /DROPDOWN -->

    <!-- SIDE MENU TITLE -->
	<p class="side-menu-title">Info &amp; Statistics</p>
	<!-- /SIDE MENU TITLE -->

	<!-- DROPDOWN -->
	<ul class="dropdown dark hover-effect">
		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item active">
			<a href="dashboard-statement.html">
                <span class="sl-icon icon-layers"></span>
                Sales Statement
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-statistics.html">
                <span class="sl-icon icon-chart"></span>
                Statistics
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->
	</ul>
	<!-- /DROPDOWN -->

     <!-- SIDE MENU TITLE -->
	<p class="side-menu-title">Author Tools</p>
	<!-- /SIDE MENU TITLE -->

	<!-- DROPDOWN -->
	<ul class="dropdown dark hover-effect">
		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-uploaditem.html">
                <span class="sl-icon icon-arrow-up-circle"></span>
                Upload Item
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->

		<!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-manageitems.html">
                <span class="sl-icon icon-folder-alt"></span>
                Manage Items
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->

        <!-- DROPDOWN ITEM -->
		<li class="dropdown-item">
			<a href="dashboard-withdrawals.html">
                <span class="sl-icon icon-wallet"></span>
                Withdrawals
            </a>
		</li>
		<!-- /DROPDOWN ITEM -->
	</ul>
	<!-- /DROPDOWN -->

    <a href="{{ route('logout') }}" class="button medium secondary">Logout</a>
</div>
<!-- /SIDE MENU -->
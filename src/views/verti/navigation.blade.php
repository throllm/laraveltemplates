<nav id="nav">
	<ul>
		<li class="current">
			<a href="{!! url('/verti', array('sub' => '')); !!}">Welcome</a>
		</li>
		<li>
			<a href="#">Dropdown</a>
			<ul>
				<li>
					<a href="#">Lorem ipsum dolor</a>
				</li>
				<li>
					<a href="#">Magna phasellus</a>
				</li>
				<li>
					<a href="#">Phasellus consequat</a>
					<ul>
						<li>
							<a href="#">Lorem ipsum dolor</a>
						</li>
						<li>
							<a href="#">Phasellus consequat</a>
						</li>
						<li>
							<a href="#">Magna phasellus</a>
						</li>
						<li>
							<a href="#">Etiam dolore nisl</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Veroeros feugiat</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="{!! url('/verti', array('sub' => 'leftsidebar')); !!}">Left Sidebar</a>
		</li>
		<li>
			<a href="{!! url('/verti', array('sub' => 'rightsidebar')); !!}">Right Sidebar</a>
		</li>
		<li>
			<a href="{!! URL::route('verti', array('id' => 'nosidebar')) !!}">No Sidebar</a>
		</li>
	</ul>
</nav>
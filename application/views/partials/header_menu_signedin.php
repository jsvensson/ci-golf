				<div class="btn-group pull-right">
					<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">Mitt konto <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?= anchor('home/settings', $this->lang->line('menu_item_settings')) ?></li>
						<li class="divider"></li>
						<li><?= anchor('user/logout', $this->lang->line('menu_item_logout')) ?></li>
					</ul>
				</div>


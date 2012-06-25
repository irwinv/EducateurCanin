<?php

namespace Patrick\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PatrickUtilisateurBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}

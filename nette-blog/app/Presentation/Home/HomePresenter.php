<?php declare(strict_types=1);

namespace App\Presentation\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function handleGenerateRandomNumber(): void
    {
	    // send an instruction to JS to redraw "pleaseReload" snippet
	    $this->redrawControl('pleaseReload');
    }
}

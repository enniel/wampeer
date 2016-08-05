<?php

namespace Enniel\Wampeer\Console\Commands;

use Illuminate\Console\Command;
use Thruway\Peer\RouterInterface;

class RouterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wampeer:router:start
                               {--loop=true : Use event loop}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the default Thruway WAMP router';

    /**
     * Execute the console command.
     *
     * @param  RouterInterface $router
     *
     * @return mixed
     */
    public function handle(RouterInterface $router)
    {
        $this->info('Start Thruway WAMP router');
        $router->start($this->option('loop'));
    }
}

<?php

use Phalcon\Mvc\View;
use Its\Example\Dashboard\Infrastructure\Persistence\SqlUsersRepository;
use Its\Example\Dashboard\Infrastructure\Persistence\SqlMentorRepository;
use Its\Example\Dashboard\Infrastructure\Persistence\SqlLesRepository;

use Its\Example\Dashboard\Core\Application\Service\Login\LoginService;
use Its\Example\Dashboard\Core\Application\Service\AddUsers\AddUsersService;
use Its\Example\Dashboard\Core\Application\Service\AddMentor\AddMentorService;
use Its\Example\Dashboard\Core\Application\Service\ViewAllMentor\ViewAllMentorService;
use Its\Example\Dashboard\Core\Application\Service\DeleteMentor\DeleteMentorService;
use Its\Example\Dashboard\Core\Application\Service\FindMentorById\FindMentorByIdService;
use Its\Example\Dashboard\Core\Application\Service\UpdateMentor\UpdateMentorService;
use Its\Example\Dashboard\Core\Application\Service\VerifikasiBayardanLes\VerifikasiBayardanLesService;
use Its\Example\Dashboard\Core\Application\Service\ViewAllPengajuan\ViewAllPengajuanService;
use Its\Example\Dashboard\Core\Application\Service\UserRegister\UserRegisterService;
use Its\Example\Dashboard\Core\Application\Service\Pengajuan\PengajuanService;
use Its\Example\Dashboard\Core\Application\Service\CheckPengajuan\CheckPengajuanService;
use Its\Example\Dashboard\Core\Application\Service\UnggahBukti\UnggahBuktiService;
use Its\Example\Dashboard\Core\Application\Service\RiwayatLes\RiwayatLesService;
use Its\Example\Dashboard\Core\Application\Service\RateMentor\RateMentorService;

$di['view'] = function () {
    $view = new View();
    $view->setViewsDir(__DIR__ . '/../Presentation/Web/views/');

    $view->registerEngines(
        [
            ".volt" => "voltService",
        ]
        );

    return $view;
};

$di['db'] = function() use($di) {
    $config = $di->get('config');

    $dbAdapter = $config->database->adapter;

    return new $dbAdapter([
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
    ]);
};

$di->set('sqlUsersRepository', function() use ($di) {
    return new SqlUsersRepository($di->get('db'));
});

$di->set('sqlMentorRepository', function() use ($di) {
    return new SqlMentorRepository($di->get('db'));
});

$di->set('sqlLesRepository', function() use ($di) {
    return new SqlLesRepository($di->get('db'));
});

$di->setShared('loginService', function() use ($di) {
    return new LoginService($di->get('sqlUsersRepository'));
});

$di->setShared('addUsersService', function() use($di) {
    return new AddUsersService($di->get('sqlUsersRepository'));
});

$di->setShared('addMentorService', function() use ($di) {
    return new AddMentorService($di->get('sqlMentorRepository'));
});

$di->setShared('viewAllMentorService', function() use ($di) {
    return new ViewAllMentorService($di->get('sqlMentorRepository'));
});

$di->setShared('deleteMentorService', function() use ($di) {
    return new DeleteMentorService($di->get('sqlMentorRepository'));
});

$di->setShared('findMentorByIdService', function() use ($di) {
    return new FindMentorByIdService($di->get('sqlMentorRepository'));
});

$di->setShared('updateMentorService', function() use ($di) {
    return new UpdateMentorService($di->get('sqlMentorRepository'));
});

$di->setShared('verifikasiBayardanLesService', function() use ($di) {
    return new VerifikasiBayardanLesService($di->get('sqlLesRepository'));
});

$di->setShared('viewAllPengajuanService', function() use ($di) {
    return new ViewAllPengajuanService($di->get('sqlLesRepository'));
});

$di->setShared('userRegisterService', function() use ($di) {
    return new UserRegisterService($di->get('sqlUsersRepository'));
});

$di->setShared('pengajuanService', function() use ($di) {
    return new PengajuanService($di->get('sqlLesRepository'));
});

$di->setShared('checkPengajuanService', function() use ($di) {
    return new CheckPengajuanService($di->get('sqlLesRepository'));
});

$di->setShared('unggahBuktiService', function() use ($di) {
    return new UnggahBuktiService($di->get('sqlLesRepository'));
});

$di->setShared('riwayatLesService', function() use($di) {
    return new RiwayatLesService($di->get('sqlLesRepository'));
});

$di->setShared('rateMentorService', function() use ($di) {
    return new RateMentorService($di->get('sqlMentorRepository'));
});
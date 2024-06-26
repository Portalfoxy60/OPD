<?php
/*URI унифицированный идентификатор ресурса, 
	который был предоставлен для доступа к странице
знак ? отделяет полный путь и значение 
	переменной идентификатора для фильтрации
*/
$host = explode('?', $_SERVER['REQUEST_URI']);
//полный путь к проекту до знака ?
$path=$host[0];
	//количество папок вложений - считаем символы "/"
	$num = substr_count($path, '/');
	//вычисляем маршрут после последнего символа "/"
	$route = explode('/', $path)[$num];
//значение переменной - идентификатора фильтрации - после знака ?
if(strstr($_SERVER['REQUEST_URI'],'?')){//если найден символ '?'
	$id=urldecode($host[1]);//прочитаем значение из адресной строки и уберем пробелы
}
//-----------------------code
$path = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($path,'/');
$route = explode('/',$path)[$num];
if($route == '' || $route == 'index'){
	Controller::startSite();
} elseif ($route == 'students') {
	Controller::StudentList();
} elseif ($route == 'studByspec' && isset($_GET['id'])) {
	Controller::StudentByspec($_GET['id']);
} elseif ($route == 'student' && isset($_GET['id'])) {
	Controller::StudentDetail($_GET['id']);
} elseif ($route == 'blocks') {
	Controller::blockList();
} elseif ($route == 'detailnews' && isset($_GET['id'])){
	Controller::blockDetail($_GET['id']);
} elseif($route=='addstudent') {
	controllerStudent::addStudentForm();
} elseif($route=='addstudentResult') {
	controllerStudent::addStudentResult();
} elseif($route=='editstudent' && isset($_GET['id'])) {
	controllerStudent::editStudentForm($_GET['id']);
} elseif($route=='editstudentResult' && isset($_GET['id'])) {
	controllerStudent::editStudentResult($_GET['id']);
} elseif($route=='deleteStudent' && isset($_GET['id'])) {
	controllerStudent::deleteStudent($_GET['id']);
} elseif ($route == 'result'){
	controllerStudent::viewResult();
} elseif ($route == 'login'){
	controllerUser::loginForm();
// } elseif ($route == 'search'){
// 	if(isset($_GET['text'])){
// 		Controller::textSearch($_GET['text']);
// 	} else {
// 		Controller::error404();
// 	}
}elseif ($route == 'loginResult'){
	controllerUser::loginResult();
} elseif ($route == 'logout'){
	controllerUser::logoutAction();
} else {
	Controller::error404();
}

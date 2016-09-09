<?php
class Skyler {
	public $firstName = "Skyler";
	public $middleName = "Jerome";
	public $lastName = "Rexroad";

	public $basics = [
		"label" => "Web Developer",
		"email" => "skyler.rexroad@gmail.com",
		"phone" => "(505) 379-1072",
		"website" => "https://skylerrexroad.com",
		"summary" => "Insert big long bio here.",
		"location" => [
			"address" => "3120 Crimson Rose Ln. SW",
			"postalCode" => "87112",
			"city" => "Albuquerque",
			"countryCode" => "US",
			"region" => "New Mexico"
		]
	];

	public $profiles = [
		[
			"network" => "GitHub",
			"username" => "Skylarity",
			"url" => "https://github.com/"
		],
		[
			"network" => "Twitter",
			"username" => "Skylarity",
			"url" => "https://twitter.com/"
		],
		[
			"network" => "SoundCloud",
			"username" => "Skylarity",
			"url" => "https://soundcloud.com/"
		],
		[
			"network" => "LinkedIn",
			"username" => "SkylerRexroad",
			"url" => "https://www.linkedin.com/in/"
		],
		[
			"network" => "Keybase",
			"username" => "Skylarity",
			"url" => "https://keybase.io/"
		]
	];

	public $work = [
		[
			"company" => "CNM Deep Dive Coding Bootcamp",
			"position" => "Assistant Instructor",
			"website" => "https://bootcamp-coders.cnm.edu",
			"startDate" => "2015-10-15",
			"endDate" => "2016-09-16",
			"summary" => "Trained students on the fundamentals of modern web development and and programming with the latest tools, languages, and technologies. Taught the full LAMP stack and AngularJS as well as basic server administration and how to use tools such as package managers.",
			"highlights" => []
		],
		[
			"company" => "Hermes Development",
			"position" => "Contractor",
			"website" => "https://hermesdev.io/",
			"startDate" => "2016-04",
			"endDate" => "2016-05",
			"summary" => "Used Python to automate an e-commerce site migration from one platform to another.",
			"highlights" => []
		],
		[
			"company" => "University of New Mexico",
			"position" => "Research Assistant",
			"website" => "",
			"startDate" => "2014-07",
			"endDate" => "2015-05",
			"summary" => "Built and programmed physical manipluators for swarm robots.",
			"highlights" => []
		]
	];

	public $education = [
		[
			"institution" => "CNM Deep Dive Coding Bootcamp",
			"area" => "Albuquerque, New Mexico",
			"studyType" => "Web Development",
			"startDate" => "2015-07",
			"endDate" => "2015-09",
			"gpa" => "",
			"courses" => []
		],
		[
			"institution" => "University of New Mexico",
			"area" => "New Mexico",
			"studyType" => "School of Engineering, Computer Science",
			"startDate" => "2014-08",
			"endDate" => "2015-05",
			"gpa" => "",
			"courses" => []
		]
	];

	public $awards = [
		[
			"title" => "Second Place",
			"date" => "2015-09-17",
			"awarder" => "Pitch Fiesta 4.0",
			"summary" => "Won for being the second most viable startup at the competition."
		],
		[
			"title" => "NM Startup of the Year",
			"date" => "2015-09-15",
			"awarder" => "Tech.co",
			"summary" => "Won for being the best new startup in Albuquerque in 2015. Was given the opportunity to go to the national tier of the competition to pitch to investors."
		]
	];

	public $skills = [
		[
			"name" => "Programming Languages",
			"level" => "",
			"keywords" => [
				"HTML5",
				"CSS3",
				"JavaScript",
				"jQuery",
				"AngularJS 1.5 & 2",
				"MySQL",
				"Python",
				"Java",
				"C++",
				"C#"
			]
		],
		[
			"name" => "IDEs",
			"level" => "",
			"keywords" => [
				"Atom",
				"PhpStorm",
				"Sublime Text",
				"PyCharm",
				"Brackets",
				"IntelliJ IDEA",
				"Eclipse"
			]
		],
		[
			"name" => "Software",
			"level" => "",
			"keywords" => [
				"FL Studio",
				"Blender 3D",
				"Adobe Photoshop",
				"Adobe Illustrator"
			]
		],
		[
			"name" => "Operating Systems",
			"level" => "",
			"keywords" => [
				"Mac OSX",
				"Ubuntu",
				"Windows 7/8/10"
			]
		],
		[
			"name" => "Other Skills",
			"level" => "",
			"keywords" => [
				"Git (and GitHub)",
				"Command Line (Linux/Unix/Windows)",
				"Basic Server Administration",
				"Bash Scripting",
				"PHPUnit"
			]
		]
	];

	public $interests = [
		[
			"name" => "Music",
			"keywords" => [
				"FL Studio",
				"Electric/Acoustic Guitar",
				"Electric Bass",
				"Drums"
			]
		]
	];
}

header("Content-type: text/json");
$skyler = new Skyler();
echo json_encode($skyler);

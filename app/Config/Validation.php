<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

    public $personlogin = [
        'username' => 'required',
        'password' => 'required',
        'checkDatenschutz' => 'required'
    ];

    public $personlogin_errors = [
        'username' => [
            'required' => 'Bitte geben Sie einen g&uumltigen Benutzernamen ein!'
        ],
        'password' => [
            'required' => 'Bitte geben Sie ein g&uuml;ltiges Passwort ein!'
        ],
        'checkDatenschutz' => [
            'required' => 'Sie m&uuml;ssen den Datenschutzbestimmungen zustimmen!'
        ]
    ];

    public $personbearbeiten = [
        'username' => 'required',
        'email' => 'required',
        'stadt' => 'required',
        'postleitzahl' => 'required|integer|exact_length[5]',
        'land' => 'required'
    ];

    public $personbearbeiten_errors = [
        'username' => [
            'required' => 'Bitte geben Sie einen Benutzernamen ein!'
        ],
        'email' => [
            'required' => 'Bitte tragen Sie eine E-Mail ein!'
        ],
        'stadt' => [
            'required' => 'Bitte geben Sie einen Wohnort an!'
        ],
        'postleitzahl' => [
            'required' => 'Bitte geben Sie eine Postleitzahl an!',
            'integer' => 'Das ist keine g&uuml;ltige Postleitzahl!',
            'exact_length' => 'Das ist keine Postleitzahl!'
        ],
        'land' => [
            'required' => 'Bitte geben Sie ein Land an!'
        ]
    ];

}

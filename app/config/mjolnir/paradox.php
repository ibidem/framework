<?php return array
	(
		// project channel
		'demo' => array
			(
				'1.0.0' => \app\Pdx::gate
					(
						'demo/install',
						[
							// depends on...
							'mjolnir-access' => '1.0.0',
						]
					),
			),

	); # config

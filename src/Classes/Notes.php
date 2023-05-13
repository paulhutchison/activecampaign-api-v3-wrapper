<?php

namespace Phwebs\ActiveCampaign\Classes;

use Phwebs\ActiveCampaign\Connector;


class Notes extends Connector
{
	public function createContactNote($contactId, $note)
	{
		return $this->createNote([
			'note' => $note,
			'reltype' => 'Subscriber',
			'relid' => $contactId,
		]);
	}
	
	public function createNote($params)
	{
		return $this->request('POST', 'notes', ['note' => $params]);
	}

}

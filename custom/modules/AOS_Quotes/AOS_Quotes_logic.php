<?php
  
  
  class AOS_Quotes_logic
  {
 
		function after_save(&$bean, $event, $arguments) 
		{
		global $current_user, $app_list_strings, $db;
		
		$query1 = "SELECT
					opportunities.id,
					sum(aos_quotes.total_amount) as sum_partenariats
					FROM
					opportunities
					INNER JOIN opportunities_cstm ON opportunities.id = opportunities_cstm.id_c
					INNER JOIN opportunities_aos_quotes_1_c ON opportunities_cstm.id_c = opportunities_aos_quotes_1_c.opportunities_aos_quotes_1opportunities_ida
					INNER JOIN aos_quotes ON opportunities_aos_quotes_1_c.opportunities_aos_quotes_1aos_quotes_idb = aos_quotes.id
					where opportunities.deleted = 0
					AND opportunities_aos_quotes_1_c.deleted = 0
					AND aos_quotes.deleted = 0
					AND aos_quotes.approval_status = 'accepte'";
		
		$result1 = $db->query($query1);
		$row1 = $db->fetchByAssoc($result1);
		$opp_id = $row1['id'];
		$sum_partenariats = $row1['sum_partenariats'];
		
		$query1a = "UPDATE opportunities_cstm
					SET opportunities_cstm.montant_partenariats_c = '$sum_partenariats',
					opportunities_cstm.montant_finance_c = opportunities_cstm.montant_initial_c + '$sum_partenariats'
					WHERE id_c = '$opp_id'";		
		$result1a = $db->query($query1a);
		
		
		
		
		
		
		$query2 = "SELECT
					aos_quotes.opportunity_id as id,
					sum(aos_quotes.total_amount) as sum_propositions
					FROM
					opportunities
					INNER JOIN aos_quotes ON opportunities.id = aos_quotes.opportunity_id
					where aos_quotes.deleted = 0
					AND opportunities.deleted = 0
					AND aos_quotes.approval_status = 'accepte'";
		
		$result2 = $db->query($query2);
		$row2 = $db->fetchByAssoc($result2);
		$opp_id = $row2['id'];
		$sum_propositions = $row2['sum_propositions'];
		
		$query2a = "UPDATE opportunities_cstm
					SET montant_propositions_c = '$sum_propositions'
					WHERE id_c = '$opp_id'";		
		$result2a = $db->query($query2a);
		
		
		
	
		
		
		
		
		$query3 = "SELECT
					aos_quotes.opportunity_id as id,
					opportunities_cstm.montant_finance_c
					FROM
					opportunities_cstm
					INNER JOIN aos_quotes ON opportunities_cstm.id_c = aos_quotes.opportunity_id
					where aos_quotes.deleted = 0
					AND aos_quotes.approval_status = 'accepte'";
		
		$result3 = $db->query($query3);
		$row3 = $db->fetchByAssoc($result3);
		$opp_id = $row3['id'];
		$montant_finance = $row3['montant_finance_c'];
		
		$query3a = "UPDATE opportunities
					SET amount = '$montant_finance' - '$sum_propositions'
					WHERE id = '$opp_id'";		
		$result3a = $db->query($query3a);
		
		file_put_contents('amount_projet.log', $query3a);

		}
		
  }
?>


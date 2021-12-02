<?php

class PokeCardsModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=pokemontcgdb;charset=utf8', 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getAllCards() {
        $query = $this->db->prepare('SELECT * FROM pokemon_card');
        $query->execute();
    
        $cards = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $cards;
    }

    function getACard($id) {
        $query = $this->db->prepare('SELECT * FROM pokemon_card WHERE id = :id');
        $query->execute(['id' => $id]);

        $singleCard = $query->fetchAll(PDO::FETCH_OBJ);

        return $singleCard;
    }

    function insertCard($type, $hp, $stage, $evolvesFrom, $attackName1, $attackDesc1, $attackDamage1, $attackEnergies1, $attackName2, $attackDesc2, $attackDamage2, $attackEnergies2, $hasPokePower, $pokePowerName, $pokePowerDesc, $weakness, $resistance, $retreatCost, $pokedexInfo, $card_id) {
        $query = $this->db->prepare('INSERT INTO pokemon_card (type, hp, stage, evolvesFrom, attackName1, attackDesc1, attackDamage1, attackEnergies1, attackName2, attackDesc2, attackDamage2, attackEnergies2, hasPokePower, pokePowerName, pokePowerDesc, weakness, resistance, retreatCost, pokedexInfo, card_id) VALUES (:type, :hp, :stage, :evolvesFrom, :attackName1, :attackDesc1, :attackDamage1, :attackEnergies1, :attackName2, :attackDesc2, :attackDamage2, :attackEnergies2, :hasPokePower, :pokePowerName, :pokePowerDesc, :weakness, :resistance, :retreatCost, :pokedexInfo, :card_id)');
        $query->execute(['type' => $type, 'hp' => $hp, 'stage' => $stage, 'evolvesFrom' => $evolvesFrom, 'attackName1' => $attackName1, 'attackDesc1' => $attackDesc1, 'attackDamage1' => $attackDamage1, 'attackEnergies1' => $attackEnergies1, 'attackName2' => $attackName2, 'attackDesc2' => $attackDesc2, 'attackDamage2' => $attackDamage2, 'attackEnergies2' => $attackEnergies2, 'hasPokePower' => $hasPokePower, 'pokePowerName' => $pokePowerName, 'pokePowerDesc' => $pokePowerDesc, 'weakness' => $weakness, 'resistance' => $resistance, 'retreatCost' => $retreatCost, 'pokedexInfo' => $pokedexInfo, 'card_id' => $card_id]);
    }

    function deleteCard($card_id) {
        $query = $this->db->prepare('DELETE FROM pokemon_card WHERE card_id = :card_id');
        $query->execute(['card_id' => $card_id]);
    }

    function updateCard($id, $type, $hp, $stage, $attackName1, $attackDesc1, $attackDamage1, $attackEnergies1, $attackName2, $attackDesc2, $attackDamage2, $attackEnergies2, $hasPokePower, $pokePowerName, $pokePowerDesc, $weakness, $resistance, $retreatCost, $pokedexInfo) {
        $query = $this->db->prepare('UPDATE pokemon_card SET type = :type, hp = :hp, stage = :stage, attackName1 = :attackName1, attackDesc1 = :attackDesc1, attackDamage1 = :attackDamage1, attackEnergies1 = :attackEnergies1, attackName2 = :attackName2, attackDesc2 = :attackDesc2, attackDamage2 = :attackDamage2, attackEnergies2 = :attackEnergies2, hasPokePower = :hasPokePower, pokePowerName = :pokePowerName, pokePowerDesc = :pokePowerDesc, weakness = :weakness, resistance = :resistance, retreatCost = :retreatCost, pokedexInfo = :pokedexInfo WHERE id = :id');
        $query->execute(['type' => $type, 'hp' => $hp, 'stage' => $stage, 'attackName1' => $attackName1, 'attackDesc1' => $attackDesc1, 'attackDamage1' => $attackDamage1, 'attackEnergies1' => $attackEnergies1, 'attackName2' => $attackName2, 'attackDesc2' => $attackDesc2, 'attackDamage2' => $attackDamage2, 'attackEnergies2' => $attackEnergies2, 'hasPokePower' => $hasPokePower, 'pokePowerName' => $pokePowerName, 'pokePowerDesc' => $pokePowerDesc, 'weakness' => $weakness, 'resistance' => $resistance, 'retreatCost' => $retreatCost, 'pokedexInfo' => $pokedexInfo, 'id' => $id]);
    }
}
<?php

function add_artist($artist)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    $result = pg_insert($connect, 'artists', $artist);
    pg_close($connect);
    return $result;
}

function update_artist($artist_id, $artist)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    $condition = array('id' => $artist_id);
    $result = pg_update($connect, 'artists', $artist, $condition);
    pg_close($connect);
    return $result;
}

function delete_artist($artist_id)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    $condition = array('id' => $artist_id);
    $result = pg_delete($connect, 'artists', $condition);
    pg_close($connect);
    return $result;
}

function add_chords($song_id, &$data)
{
    $chords = $data['chords'];
    unset($data["chords"]);
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    pg_query(
        $connect,
        "DELETE FROM songs_chords WHERE song_id = '$song_id'"
    );

    foreach ($chords as $chordId) {
        pg_insert($connect, 'songs_chords', array("chord_id" => $chordId, "song_id" => $song_id));
    }
    pg_close($connect);
}

function add_song($song)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    $result = pg_insert($connect, 'artists', $song);

    pg_close($connect);
    return $result;
}

function update_song($song_id, $song)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    add_chords($song_id, $song);

    $condition = array('id' => $song_id);
    $result = pg_update($connect, 'artists', $song, $condition);
    pg_close($connect);
    return $result;
}

function delete_song($song_id)
{
    $connect = pg_connect('host=localhost port=5432 dbname=tab_em_db user=tab_em_user password=pass1234');
    $condition = array('id' => $song_id);
    $result = pg_delete($connect, 'artists', $condition);
    pg_close($connect);
    return $result;
}

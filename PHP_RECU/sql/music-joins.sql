use music;

#1. Listar todos los artistas para cada compañía ordenando el resultado por nombre del artista.
select * from artist join record_label on  artist.record_label_id=record_label.id order by artist.name;


#2. ¿Qué compañías no tienen artistas?
select * from record_label left join artist on record_label.id=artist.record_label_id where artist.record_label_id is null;


#3.¿Qué artistas no tienen compañía?
select * from artist right join record_label on artist.record_label_id=record_label.id where record_label.id = null;


#4.Listar el número de canciones de cada artista en orden descendente
select artist.name, count(song.id) 
from artist
join album on artist.id = album.artist_id
join song on album.id = song.album_id
group by artist.id, artist.name
order by count(song.id) desc;


#5.¿Qué artista o artistas tienen el mayor número de canciones?
select artist.name, count(song.id) as numero_de_canciones
from artist
left join album on artist.id = album.artist_id
left join song on album.id = song.album_id
group by artist.id, artist.name
having count(song.id) = (
    select max(canciones)
    from (
        select count(song.id) as canciones
        from artist
        left join album on artist.id = album.artist_id
        left join song on album.id = song.album_id
        group by artist.id
    ) as subconsulta
);




#6. ¿Qué artista o artistas tienen el menor número de canciones?
select artist.name, count(song.id) as numero_de_canciones
from artist
left join album on artist.id = album.artist_id
left join song on album.id = song.album_id
group by artist.id, artist.name
having count(song.id) = (
    select min(canciones)
    from (
        select count(song.id) as canciones
        from artist
        left join album on artist.id = album.artist_id
        left join song on album.id = song.album_id
        group by artist.id
    ) as subconsulta
);



#7. Por cada artista y álbum, ¿Qué canciones duran menos de 5 minutos?
select artist.name, album.name, song.name, song.duration
from artist
left join album on artist.id = album.artist_id
left join song on album.id = song.album_id
where song.duration < 5
order by artist.name, album.name, song.name;



#8.1 ¿Cuántas canciones por cada artista y álbum duran menos de 5 minutos?
select artist.name artist_name, album.name album_name, song.name song_name, song.duration duration
from artist
join album on artist.id = album.artist_id
join song on album.id = song.album_id
where song.duration < 5;



#9. Listar los artistas, canciones y el año de las 5 canciones con más duración
select artist.name artist_name, song.name song_name, album.year album_year, song.duration duration
from song
join album on song.album_id = album.id
join artist on album.artist_id = artist.id
order by song.duration desc
limit 5;
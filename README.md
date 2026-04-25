#  Villa Booking System

Një sistem rezervimi vilash i zhvilluar në PHP si pjesë e projektit kursit. Ky sistem u mundëson përdoruesve të shohin vilat e disponueshme, të bëjnë rezervime dhe të menaxhojnë rezervimet e tyre. Administratori ka të drejta shtesë për të parë të gjitha rezervimet e sistemit.

**Faza I** e projektit realizohet pa databazë, ku të dhënat ruhen në session dhe cookie. Kjo do të thotë që rezervimet ruajtën vetëm gjatë kohës që përdoruesi është në faqe dhe humbasin pas mbylljes së browserit

## Si të ekzekutoni projektin

**XAMPP (Rekomandohet)**

Së pari, instaloni XAMPP nga apachefriends.org. Pastaj kopjoni folderin e projektit te C:\xampp\htdocs\villa-booking\. Nisni Apache nga XAMPP Control Panel dhe hapni browserin në adresën http://localhost/villa-booking/.

**PHP Built-in Server**

Në terminal, brenda folderit të projektit, ekzekutoni komandën php -S localhost:8000. Pastaj hapni browserin në http://localhost:8000.

##  Si të testoni projektin

**Testimi i Login**

Hapni faqen http://localhost/villa-booking/ dhe klikoni Login. Shkruani user1 si username dhe user123 si fjalëkalim.

**Testimi i Rezervimit**

Pasi të jeni i loguar, shkoni te faqja Villas. Zgjidhni një vilë dhe klikoni butonin Book Now. Plotësoni email-in dhe numrin e telefonit, zgjidhni një datë (minimumi data e sotme) dhe klikoni Confirm Booking.

**Testimi i Dashboard**

Nëse jeni i loguar si user (për shembull user1), në dashboard do të shfaqen vetëm rezervimet që keni bërë vetë. Nëse jeni i loguar si admin (admin/admin123), në admin dashboard do të shfaqen të gjitha rezervimet e të gjithë përdoruesve.

**Testimi i Cookie**

Hapni faqen kryesore index.php. Refresh faqen dhe do të shfaqet mesazhi "Last visit: [data e vizitës së fundit]".



##  Kërkesat Teknike

Për të ekzekutuar këtë projekt ju duhet PHP versioni 7.4 ose më i ri, si dhe një web server si Apache, Nginx ose PHP built-in server.



Shënim i rëndësishëm: Kjo është Faza I e projektit. Të dhënat ruhen në session dhe humbasin pas mbylljes së browserit. Në Fazën II do të shtohet lidhja me bazën e të dhënave MySQL për ruajtje të përhershme.

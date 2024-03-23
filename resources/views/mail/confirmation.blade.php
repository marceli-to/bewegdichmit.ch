<x-mail::message>
  @if ($data->category == 'single')
    <div class="text-base pb-base">
      Liebe Teilnehmerin, Lieber Teilnehmer<br><br>
      Vielen Dank für deine Anmeldung! Wir freuen uns sehr, dich bald bei uns im Wagerenhof zu begrüssen. Gemeinsam umrunden wir das Wagi-Quartier (ca. 500m) und geniessen einen sportlichen Tag mit allerlei Attraktionen, einer vielseitigen Foodmeile und Live Musik.<br><br>
      Wir bitten dich, den gewählten Betrag von <strong>CHF {{ number_format($data->entry_fee, 2, '.', '.') }}</strong> bis zum 25. Mai 2024 mit angefügtem Einzahlungsschein zu begleichen.<br><br>
      Mit deiner Teilnahme trägst du zur Gesundheit unserer Bewohnerinnen und Bewohner bei und unterstützt im Rahmen unseres Spendenprojektes Gesundheit und Fitness unter anderem die Realisierung eines barrierefreien und bedarfsgerechten Fitnessraums im Wagerenhof. Herzlichen Dank!<br><br>
      <strong>Programm</strong><br>
      Gerne begrüssen wir dich am Samstag, 1. Juni 2024 im Wagi-Dorfbüro für den Check-In.<br><br>
      Stiftung Wagerenhof<br>
      Asylstrasse 24<br>
      8610 Uster<br><br>
      Zeit Check-In: ab 9.30 Uhr<br>
      Bitte hole deine Startnummer im Wagi-Dorfbüro spätestens 30 Minuten vor deiner <strong>gewählten Startzeit ab</strong>.<br>
      Du startest in der Läufergruppe um: {{ $data->start_time }} Uhr.<br><br>
      Start 1. Läufergruppe: 10.30 Uhr<br>
      Start 2. Läufergruppe: 11.15 Uhr<br>
      Start 3. Läufergruppe: 12.00 Uhr<br><br>
      Die Verpflegungsstände sind ab 11.00 Uhr geöffnet.<br><br>
      Konzert <a href="https://www.consalson.ch/" target="_blank" title="ConSalSon">ConSalSon</a>: 13.00 und 15.00 Uhr<br><br>
      Siegerehrung: 13.30 Uhr<br><br>
      <strong>Rolling Buddies</strong><br>
      Falls du bei deiner Anmeldung angewählt hast, dass du eine Bewohnerin oder Bewohner am Wagi-Lauf als «Rolling Buddy» begleiten möchtest, wirst du zeitnah zum Anlass von unserem Organisationsteam per E-Mail kontaktiert.<br><br>
      Auf unseren Social-Media-Kanälen halten wir dich unter anderem über die Vorbereitungen zum Wagi-Lauf 2024 auf dem Laufenden:<br>
      <a href="https://www.instagram.com/stiftung_wagerenhof/" target="_blank">Instagram</a> / 
      <a href="https://www.facebook.com/Wagerenhof " target="_blank">Facebook</a> / 
      <a href="https://www.linkedin.com/company/stiftung-wagerenhof" target="_blank">Linkedin</a><br><br>
      Bei Fragen und weiteren Informationen freuen wir uns über deine Kontaktaufnahme über <a href="mailto:bewegdichmit@wagerenhof.ch">bewegdichmit@wagerenhof.ch</a><br><br>
      Liebe Grüsse und bis bald am Wagi-Lauf 2024!
    </div>
  @endif

  @if ($data->category == 'group')
  <div class="text-base pb-base">
    Liebe Teilnehmende der Familie/Gruppe <strong>{{ $data->group_name }}</strong><br><br>
    Vielen Dank für eure Teilnahme als Familie/Gruppe von <strong>{{ $data->number_of_members }}</strong> Personen. Wir freuen uns sehr, euch bald bei uns im Wagerenhof zu begrüssen. Gemeinsam umrunden wir das Wagi-Quartier (ca. 500m) und geniessen einen sportlichen Tag mit allerlei Attraktionen, einer vielseitigen Foodmeile und Live Musik.<br><br>
    Wir bitten euch, den gewählten Betrag von <strong>CHF {{ number_format($data->entry_fee, 2, '.', '.') }}</strong> bis zum 25. Mai 2024 mit angefügtem Einzahlungsschein zu begleichen.<br><br>
    Mit eurer Teilnahme trägt ihr zur Gesundheit unserer Bewohnerinnen und Bewohner bei und unterstützt im Rahmen unseres Spendenprojektes Gesundheit und Fitness unter anderem die Realisierung eines barrierefreien und bedarfsgerechten Fitnessraums im Wagerenhof. Herzlichen Dank!<br><br>
    <strong>Programm</strong><br>
    Gerne begrüssen wir euch am Samstag, 1. Juni 2024 im Wagi-Dorfbüro für den Check-In.<br><br>
    Stiftung Wagerenhof<br>
    Asylstrasse 24<br>
    8610 Uster<br><br>
    Zeit Check-In: ab 9.30 Uhr<br>
    Bitte hole deine Startnummer im Wagi-Dorfbüro spätestens 30 Minuten vor deiner <strong>gewählten Startzeit ab</strong>.<br>
    Du startest in der Läufergruppe um: {{ $data->start_time }} Uhr.<br><br>
    Start 1. Läufergruppe: 10.30 Uhr<br>
    Start 2. Läufergruppe: 11.15 Uhr<br>
    Start 3. Läufergruppe: 12.00 Uhr<br><br>
    Die Verpflegungsstände sind ab 11.00 Uhr geöffnet.<br><br>
    Konzert <a href="https://www.consalson.ch/" target="_blank" title="ConSalSon">ConSalSon</a>: 13.00 und 15.00 Uhr<br><br>
    Siegerehrung: 13.30 Uhr<br><br>
    Auf unseren Social-Media-Kanälen halten wir dich unter anderem über die Vorbereitungen zum Wagi-Lauf 2024 auf dem Laufenden:<br>
    <a href="https://www.instagram.com/stiftung_wagerenhof/" target="_blank">Instagram</a> / 
    <a href="https://www.facebook.com/Wagerenhof " target="_blank">Facebook</a> / 
    <a href="https://www.linkedin.com/company/stiftung-wagerenhof" target="_blank">Linkedin</a><br><br>
    Bei Fragen und weiteren Informationen freuen wir uns über deine Kontaktaufnahme über <a href="mailto:bewegdichmit@wagerenhof.ch">bewegdichmit@wagerenhof.ch</a><br><br>
    Liebe Grüsse und bis bald am Wagi-Lauf 2024!
  </div>
  @endif
</x-mail::message>

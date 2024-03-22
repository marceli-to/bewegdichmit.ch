<x-mail::message>
  <div class="text-base pb-base">
    Neue Anmeldung Wagi-Lauf 2024
  </div>
  <div class="text-base pb-base">
    <strong>Kategorie</strong><br>
    {{ $data->category == 'single' ? 'Einzelläufer:in' : 'Gruppe/Familie' }}
  </div>
  <div class="text-base pb-base">
    <strong>Startgebühr</strong><br>
    {{ $data->entry_fee }}
  </div>
  <div class="text-base pb-base">
    <strong>Startzeit</strong><br>
    {{ $data->start_time }} Uhr
  </div>
  @if ($data->group_name)
    <div class="text-base pb-base">
      <strong>Gruppenname</strong><br>
      {{ $data->group_name }}
    </div>
  @endif
  @if ($data->number_of_members)
    <div class="text-base pb-base">
      <strong>Anzahl Mitglieder</strong><br>
      {{ $data->number_of_members }}
    </div>
  @endif
  @if ($data->buddy)
    <div class="text-base pb-base">
      <strong>Rolling-Buddy</strong><br>
      Ja
    </div>
  @endif
  <div class="text-base pb-base">
    <strong>Vorname</strong><br>
    {{ $data->firstname }}
  </div>
  <div class="text-base pb-base">
    <strong>Name</strong><br>
    {{ $data->name }}
  </div>
  <div class="text-base pb-base">
    <strong>Strasse/Nr.</strong><br>
    {{ $data->street }}
  </div>
  <div class="text-base pb-base">
    <strong>PLZ/Ort</strong><br>
    {{ $data->location }}
  </div>
  <div class="text-base pb-base">
    <strong>E-Mail</strong><br>
    {{ $data->email }}
  </div>
  <div class="text-base pb-base">
    <strong>Telefon</strong><br>
    {{ $data->phone }}
  </div>

</x-mail::message>

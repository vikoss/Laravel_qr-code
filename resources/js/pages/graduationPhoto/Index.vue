<template>
  <div>
    <!--Registro persona -->
    <h1>persona</h1>
    <input-base label="Nombe (s)" id="name" />
    <input-base label="Apellido paterno" id="first_surname" />
    <input-base label="Apellido materno" id="second_surname" />
    <input-base label="Teléfono" id="phone" />
    <input-base label="Correo electrónico" id="email" />
    <h1>Confirma tu identidad</h1>
    <h2>Selecciona el tipo de identificación oficial que estas por carga para verificar tu identidad.</h2>
    <input-file
      id="face_photo_url"
      label="Nombe (s)"
      placeholder="Escribe tu nombre (s)"
    />
    <!--Registro persona -->

    <!--Registro direccion de la persona -->
    <h1>direccion</h1>
    <input-base label="Código postal" id="cp" />
    <input-base label="Ciudad" id="city" placeholder="Ciudad" disabled />
    <input-base label="Alcaldia o municipio" id="town" disabled />
    <input-base label="Colonia" id="colony" />
      <!--input type="text" name="state_code" id="state_code"-->
    <input-base label="Calle y número" id="street" />
    <!--Registro direccion de la persona -->

    <!--Registro del evento -->
    <h1>Fecha y hora</h1>
    <input-date id="date" />
    <input-time id="time" />
    <!--Registro del evento -->

    <!--Registro de la invitacion -->

    <!--Registro de la invitacion -->

    <!--Registro de la relacion que tiene con el anfitrion -->
    <h1>relacion</h1>
    <select-base id="relationship_type_id" :options="[{ id: 1, name: 'hermano' }]" />
    <input type="text" name="relationship_type_id" id="relationship_type_id">
    <!--Registro de la relacion que tiene con el anfitrion -->
  </div>
</template>

<script>
import InputBase from './../../components/Inputs/InputBase';
import InputFile from './../../components/Inputs/InputFile';
import InputDate from './../../components/Inputs/InputDate';
import InputTime from './../../components/Inputs/InputTime';
import SelectBase from './../../components/Selects/SelectBase';

export default {
  components: {
    InputBase,
    InputFile,
    InputDate,
    InputTime,
    SelectBase,
  },

}
</script>

<style>

</style>
function asientosDisponibles(asientos, solicitado) {
    const [A, B] = [
      `el asiento número ${solicitado} ha sido seleccionado`,
      `Lo sentimos, el asiento número, ${solicitado} está ocupado, pero aún quedan ${asientos.length} disponibles`
    ];

    return asientos.includes( solicitado ) ? A : B;
}
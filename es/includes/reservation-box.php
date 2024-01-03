                    <aside class="aside-reservation">
                        <h3>Reserva Ahora</h3>
                        <form method="post" id="formindex">
                            <div class="elem-group">
                                <label for="name">Nombre y Apellido</label>
                                <input type="text" id="name" name="visitor_name" placeholder="Ibonne Gonzalez Castro"
                                    pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <div class="elem-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" id="email" name="visitor_email" placeholder="ibonneg@gmail.com"
                                    required>
                            </div>
                            <div class="elem-group">
                                <label for="phone">Teléfono de contacto</label>
                                <input type="tel" id="phone" name="visitor_phone" required>
                            </div>
                            <hr>
                            <div class="elem-group inlined">
                                <label for="adult">Adultos</label>
                                <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
                            </div>
                            <div class="elem-group inlined">
                                <label for="child">Niños</label>
                                <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
                            </div>
                            <div class="elem-group inlined">
                                <label for="checkin-date">Fecha de llegada</label>
                                <input type="date" id="checkin-date" name="checkin" required>
                            </div>
                            <div class="elem-group inlined">
                                <label for="checkout-date">Fecha de salida</label>
                                <input type="date" id="checkout-date" name="checkout" required>
                            </div>
                            <div class="elem-group">
                                <label for="tour-selection">Tours a Turquía</label>
                                <select id="tour-selection" name="tour_preference" required>
                                    <option value="">Selecciona Tu Viajas</option>
                                    <option value="connecting">2 Días Capadocia Tour</option>
                                    <option value="adjoining">3 Días Capadocia Tour</option>
                                    <option value="adjacent">4 Días Ankara, Capadocia Tour</option>
                                    <option value="connecting">5 Días Estambul, Efeso, Pamukkale Tour</option>
                                    <option value="adjoining">6 Días Estambul, Capadocia</option>
                                    <option value="adjacent">8 Días Estambul, Capadocia, Antalya</option>
                                    <option value="connecting">8 Días Estambul, Capadocia, Efeso, Pamukkale</option>
                                    <option value="adjoining">9 Días Capadocia, Efeso, Pamukkale, Antalya</option>
                                    <option value="adjacent">10 Días Capadocia, Efeso, Pamukkale, Bodrum, Estambul</option>
                                    <option value="adjacent">Globo Aerostático Tour</option>

                                </select>
                            </div>
                            <hr>
                            <div class="elem-group">
                                <label for="message">Tienes Preguntas?</label>
                                <textarea id="reservation-message" name="visitor_message"
                                    placeholder="Déjamos saber tus inquietudes u observaciones en la caja de comentarios." required></textarea>
                            </div>
                            <a  href="javascript:void(0)" id="resSubmit" class="red btn-primary" >Cotiza Ahora</a>
                        </form>

                        <div class="aside-reservation reservation-response anabasarili">
                            <h3>Tu reservación se realizó con éxito.</h3>
                            <p>Ahora estás un paso más cerca de vivir tu sueño.</p>
                            <p>Nuestro ejecutivo de viajes se pondrá en contacto contigo en 10 minutos. Nos vemos pronto.</p>
                        </div>
                        <div class="aside-reservation reservation-response anabasarisiz text-danger">
                            <h3>PHONE ERROR</h3>
                            <p>Ahora estás un paso más cerca de vivir tu sueño.</p>
                            <p>Nuestro ejecutivo de viajes se pondrá en contacto contigo en 10 minutos. Nos vemos pronto.</p>
                        </div>
                        <div class="aside-reservation reservation-response anabasarisizemail text-danger">
                            <h3>MAIL ERROR</h3>
                            <p>Ahora estás un paso más cerca de vivir tu sueño.</p>
                            <p>Nuestro ejecutivo de viajes se pondrá en contacto contigo en 10 minutos. Nos vemos pronto.</p>
                        </div>
                    </aside>

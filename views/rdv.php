<h1 class="font-title text-center fw-bold mt-5">RENDEZ-VOUS EN LIGNE</h1>
<div class="row pt-3 mb-5">
    <div class="col-lg-8 offset-lg-2 col-12 pt-5">
        <form method="POST" id="formUser">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" name="appointment_date" id="appointment_date" class="form-control">
                        <span class="regular"><?= $error['appointment_date'] ?? '' ?></span>
                    </div>
                    <div class="col-md-4">
                        <select name="service" id="service" class="form-control">
                            <?php
                            $services = Service::getAll();
                            foreach ($services as $service) {
                                echo "<option value=\"" . htmlspecialchars($service['id_service']) . "\">" . htmlspecialchars($service['type']) . "</option>";
                            }
                            ?>
                        </select>
                        <span class="regular"><?= $error['service'] ?? '' ?></span>
                    </div>
                    <div class="col-md-4">
                        <select name="slot" class="form-control">
                            <?php
                            $timeslots = Timeslot::getAll();
                            foreach ($timeslots as $timeslot) {
                                echo "<option value=\"" . htmlspecialchars($timeslot['id_timeslot']) . "\">" . htmlspecialchars($timeslot['slot']) . "</option>";
                            }
                            ?>
                            <span class="regular"><?= $error['timeslot'] ?? '' ?></span>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-2 text-center">
                <button type="submit" class="btn btn-form">Sélectionner</button>
            </div>
        </form>
    </div>
</div>
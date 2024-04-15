<?php
include $this->resolve("partials/_header.php");
?>
    <section
            class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded"
    >
        <form method="POST" class="grid grid-cols-1 gap-6">
            <!-- Email -->
            <label class="block">
                <span class="text-gray-700">Email address</span>
                <input
                        type="email"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="john@example.com"
                        name="email"
                        value="<?= e($oldFormData['email'] ?? '') ?>"
                />
                <?php if (isset($errors['email'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['email'][0]) ?></div>
                <?php endif; ?>

            </label>
            <!-- Age -->
            <label class="block">
                <span class="text-gray-700">Age</span>
                <input
                        type="number"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder=""
                        name="age"
                        value="<?= e($oldFormData['age'] ?? '') ?>"
                />
                <?php if (isset($errors['age'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['age'][0]) ?></div>
                <?php endif; ?>
            </label>
            <!-- Country -->
            <label class="block">
                <span class="text-gray-700">Country</span>
                <select
                        class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="country"

                >
                    <option value="USA" <?= $oldFormData['country'] === 'USA' ? 'selected' : '' ?>>USA</option>
                    <option value="Canada" <?= $oldFormData['country'] === 'Canada' ? 'selected' : '' ?>>Canada</option>
                    <option value="Mexico" <?= $oldFormData['country'] === 'Mexico' ? 'selected' : '' ?>>Mexico</option>
                    <option value="Invalid">Invalid Country</option>
                </select>
                <?php if (isset($errors['country'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['country'][0]) ?></div>
                <?php endif; ?>
            </label>
            <!-- Social Media URL -->
            <label class="block">
                <span class="text-gray-700">Social Media URL</span>
                <input
                        type="text"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder=""
                        name="socialMediaUrl"
                        value="<?= e($oldFormData['socialMediaUrl'] ?? '') ?>"
                />
                <?php if (isset($errors['socialMediaUrl'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['socialMediaUrl'][0]) ?></div>
                <?php endif; ?>
            </label>
            <!-- Password -->
            <label class="block">
                <span class="text-gray-700">Password</span>
                <input
                        type="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder=""
                        name="password"
                />
                <?php if (isset($errors['password'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['password'][0]) ?></div>
                <?php endif; ?>
            </label>
            <!-- Confirm Password -->
            <label class="block">
                <span class="text-gray-700">Confirm Password</span>
                <input
                        type="password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder=""
                        name="confirmPassword"
                />
                <?php if (isset($errors['confirmPassword'])): ?>
                    <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['confirmPassword'][0]) ?></div>
                <?php endif; ?>
            </label>
            <!-- Terms of Service -->
            <div class="block">
                <div class="mt-2">
                    <div>
                        <label class="inline-flex items-center">
                            <input
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                                    type="checkbox"
                                    name="tos"
                                <?= $oldFormData['tos'] ?? false ? 'checked' : '' ?>
                            />
                            <span class="ml-2">I accept the terms of service.</span>
                        </label>
                        <?php if (isset($errors['tos'])): ?>
                            <div class="bg-gray-100 mt-2 p-2 text-red-500"><?= e($errors['tos'][0]) ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <button
                    type="submit"
                    class="block w-full py-2 bg-indigo-600 text-white rounded"
            >
                Submit
            </button>
        </form>
    </section>

<?php
include $this->resolve("partials/_footer.php");
?>
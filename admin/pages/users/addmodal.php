<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="addusermodal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-4xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new user
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/users.inc.php" method="POST">
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-9 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
              <input type="text" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="First Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900">Middle Name</label>
              <input type="text" name="middlename" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Middle Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
              <input type="text" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Last Name" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
              <input type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Address" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">Contact Number</label>
              <input type="tel" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="09123456789" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
              <input type="text" name="department" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Department" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="division" class="block mb-2 text-sm font-medium text-gray-900">Division</label>
              <select name="division" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5">
                <option disabled selected value>Choose Division</option>
                <option value="Integrated School">Integrated School</option>
                <option value="College">College</option>
                <option value="ASF/ASP">ASF/ASP</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
              <select name="status" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" required>
                <option disabled selected value>Choose Status</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Account Type</label>
              <select name="type" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" required>
                <option disabled selected value>Choose Account Type</option>
                <option value="admin">Administrator</option>
                <option value="user">User</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
              <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="example@dlsl.edu.ph" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
              <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="••••••••" required>
            </div>
            <div class="col-span-9 sm:col-span-3">
              <label for="passwordRepeat" class="block mb-2 text-sm font-medium text-gray-900">Confirm Password</label>
              <input type="password" name="passwordRepeat" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="••••••••" required>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add user</button>
        </div>
      </form>
    </div>
  </div>
</div>
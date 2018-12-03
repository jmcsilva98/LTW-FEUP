<div id="delete_account" class="modal">
        <p>Are you sure you want to delete your account? This action is permanent.</p>
        <div class="buttons">
            <input onclick="closeBox('Delete Account')" type="button" value="Cancel">
            <form action="../actions/action_delete_account.php" method="post">
                <input type="submit" name="Submit" value="Delete">
            </form>
        </div>
</div>
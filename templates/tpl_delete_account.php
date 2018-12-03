<div id="delete_account" class="popup">
    <div class="popup-content">
        <p>Are you sure you want to delete your account? This action is permanent.</p>
        <div class="buttons">
            <form action="../actions/action_delete_account.php" method="post">
                <input type="submit" name="Submit" value="Delete">
            </form>
            <input onclick="closeBox('Delete Account')" type="button" value="Cancel">
        </div>
    </div>
</div>
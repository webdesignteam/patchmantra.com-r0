<style>
    .chatbot-btn {
        position: fixed;
        bottom: 0px;
        right: 0px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #007bff;
        color: white;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }
     .chatbot-btn img{
         width: 100%;
     }

    #chatbot-frame {
        width: 100%;
        height: 68vh;
        border: none;
        display: none;
    }

    .modal-dialog {
        margin-right: -36px !important;
    }

    .modal-header {
        background: #E1C2A3;
    }

    .main-header {
        padding: 16px 32px;
        color: #000000;
        text-align: center;
        /*box-shadow: 0 4px 8px rgba(0,0,0,0.1);*/
        width: 26rem;
    }

    .main-header h1 {
        margin: 0;
        font-size: 1.6rem !important;
        font-weight: 700;
        color: #000000;
    }

    .main-header p {
        margin: 8px 0 0 0;
        opacity: 0.9;
        font-size: 0.9rem;
    }

    .modal-content {
        width: 88% !important;
    }
</style>

<div class="patch_mantra_container">
    <!-- Button trigger modal -->
    <button type="button" class="chatbot-btn" data-toggle="modal" data-target="#chatbotModal">
        <img src="https://www.patchmantra.com/assets/img/chatboat_img.png?Version=0" alt="Chatbot Icon" loading="eager" />
    </button>

    <!-- Modal -->
    <div class="modal fade" id="chatbotModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="chatbotModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="main-header">
                        <h1 class="modal-title" id="chatbotModalLabel">Mantra Bot</h1>
                        <p class="mb-0">Your trusted companion for patch therapy</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <iframe id="chatbot-frame" title="Chatbot"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const chatbotModal = document.getElementById('chatbotModal');
        const iframe = document.getElementById('chatbot-frame');
        const iframeSrc = "https://mantrabot.patchmantra.com/";

        $('#chatbotModal').on('shown.bs.modal', function () {
            iframe.src = iframeSrc;
            iframe.style.display = "block";
        });

        $('#chatbotModal').on('hidden.bs.modal', function () {
            iframe.src = "";
            iframe.style.display = "none";
        });
    });
</script>

import requests


def send_alert():

    try:

        response = requests.post(
            "http://127.0.0.1:8000/api/alerts",
            json={
                "camera_id": 1,
                "event_type": "Motion Detected",
                "message": "Movement detected"
            }
        )

        print(response.json())

    except Exception as e:
        print(e)
